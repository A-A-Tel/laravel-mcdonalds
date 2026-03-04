<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequestRequest;
use App\Models\ReservationRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ReservationRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservationRequests = ReservationRequest::all()->where('user_id', Auth::id());

        return view('pages.reservations.index', ['reservation_requests' => $reservationRequests]);
    }

    public function adminIndex() {
        $reservationRequests = ReservationRequest::all()->sortBy('allowed');

        return view('admin.reservations.index', ['reservation_requests' => $reservationRequests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationRequestRequest $request)
    {
        $data = $request->validated();
        $reservationRequest = new ReservationRequest();
        $reservationRequest->datetime = $data['datetime'];
        $reservationRequest->people_count = $data['people_count'];
        $reservationRequest->message = $data['message'];
        $reservationRequest->user_id = Auth::user()->id;
        $reservationRequest->save();

        return redirect()->route('reservations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservationRequest $reservationRequest)
    {
        return view('admin.reservations.show', ['reservation_request' => $reservationRequest, 'user' => $reservationRequest->user()->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReservationRequest $reservationRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationRequest $reservationRequest)
    {
        $reservationRequest->allowed = !$reservationRequest->allowed;
        $reservationRequest->save();

        return redirect()->route('admin.reservations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReservationRequest $reservationRequest)
    {
        $reservationRequest->delete();

        return redirect()->route('admin.reservations.index');
    }
}

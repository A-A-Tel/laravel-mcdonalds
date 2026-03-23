<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequestRequest;
use App\Models\ContactRequest;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ContactRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactRequests = ContactRequest::query()->where('user_id', Auth::id());

        return view('pages.contacts.index', ['contact_requests' => $contactRequests]);
    }

    public function adminIndex() {
        $contactRequests = ContactRequest::all()->sortBy('processed');

        return view('admin.contacts.index', ['contact_requests' => $contactRequests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequestRequest $request)
    {
        $data = $request->validated();
        $contactRequest = new ContactRequest();
        $contactRequest->message = $data['message'];
        $contactRequest->user_id = Auth::user()->id;
        $contactRequest->save();

        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactRequest $contactRequest)
    {
        return view('admin.contacts.show', ['contact_request' => $contactRequest, 'user' => $contactRequest->user()->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactRequest $contactRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $contactRequest)
    {
        $contactRequest->processed = !$contactRequest->processed;
        $contactRequest->save();

        return redirect()->route('admin.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactRequest $contactRequest)
    {
        $contactRequest->delete();

        return redirect()->route('admin.contacts.index');
    }
}

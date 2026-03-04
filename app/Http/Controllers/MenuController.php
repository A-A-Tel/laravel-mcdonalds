<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function index(Request $request) {
        $query = Item::query();

        if ($request->has('search')) {
            $search = $request->input('search');

            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $items = $query->get();

        return view('pages.menu', ['items' => $items]);
    }

}

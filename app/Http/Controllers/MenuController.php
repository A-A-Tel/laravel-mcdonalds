<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function index() {
        $items = Item::all();

        return view('pages.menu', ['items' => $items]);
    }
}

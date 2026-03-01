<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Routing\Controller;

class MenuController extends Controller
{
    public function index() {
        $items = Item::all();
        $items[] = new Item();
        return view('menu', ['items' => $items]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function index() {
        $items = Item::all();
        $items[] = new Item();
        return view('order', ['items' => $items]);
    }
}

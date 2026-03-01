<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ItemController
{
    public function index()
    {
        $items = Item::all();

        return view('admin.items.index', ['items' => $items]);
    }

    public function show(Item $item) {
        return view('admin.items.show', ['item' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.admin.item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        $data = $request->validated();

        $extension = $data['image']->getClientOriginalExtension();
        do {
            $string_name = Str::random() . '.' . $extension;
        } while (Storage::disk('public')->exists('items/' . $string_name));

        Storage::disk('public')->putFileAs('items/', $data['image'], $string_name);

        $item = new Item();
        $item->name = $data['name'];
        $item->description = $data['description'];
        $item->price = $data['price'];
        $item->image = $string_name;
        $item->save();

        return redirect()->route('admin.items.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('forms.admin.item.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $data = $request->validated();

        $string_name = '';
        if ($data['image']?? false) {
            Storage::disk('public')->delete('items/', $item->image);

            $extension = $data['image']->getClientOriginalExtension();
            do {
                $string_name = Str::random() . '.' . $extension;
            } while (Storage::disk('public')->exists('items/' . $string_name));

            Storage::disk('public')->putFileAs('items/', $data['image'], $string_name);
        }

        $item->name = $data['name'];
        $item->description = $data['description'];
        $item->price = $data['price'];
        if ($data['image']?? false) $item->image = $string_name;
        $item->save();

        return redirect()->route('admin.items.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect()->route('admin.items.index');
    }
}

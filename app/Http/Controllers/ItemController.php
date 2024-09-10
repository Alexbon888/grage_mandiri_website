<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $item = Item::all();
        return view('admin.index1', compact('item'));
    }

    public function create()
    {
        return view('admin.create1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
        ]);

        Item::create($request->all());

        return redirect()->route('admin.index1')
                        ->with('success', 'Item berhasil ditambahkan.');
    }

    public function show(Item $item)
    {
        return view('admin.show1', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('admin.edit1', compact('item'));
    }

    public function update(Request $request, Item $item)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
        ]);

        $item->update($request->all());

        return redirect()->route('admin.index1')
                        ->with('success', 'Item berhasil diperbarui.');
    }

    public function destroy(Item $item)
    {
        $item->delete();

        return redirect()->route('admin.index1')
                        ->with('success', 'Item berhasil dihapus.');
    }
}

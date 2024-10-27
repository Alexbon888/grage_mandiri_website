<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    // Method untuk view user
    public function userIndex()
    {
        $reservasi = Reservasi::all();
        return view('order.index', compact('reservasi'));
    }

    // Method untuk view admin
    public function adminIndex()
    {
        $reservasi = Reservasi::all();
        return view('admin.index', compact('reservasi'));
    }

    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request)
    {
        $reservasi = Reservasi::create($request->all());
        return redirect()->route('order.index') ->with('success', 'Reservasi Berhasil Dibuat.');
    }

    public function show($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('order.show', compact('reservasi'));
    }

    public function edit(Reservasi $reservasi)
    {
        return view('admin.edit', compact('reservasi'));
    }

    public function update(Request $request, Reservasi $reservasi)
    {
        $request->validate([
            'status' => 'string|max:255',
            'item' => 'nullable|string|max:255',
        ]);

        $reservasi->update($request->all());

        return redirect()->route('admin.index')
                        ->with('success', 'Reservasi Berhasil Diubah.');
    }

    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('admin.index')
                        ->with('success', 'Reservasi Berhasil Dihapus.');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $reservasis = Reservasi::where('plat', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('status', 'LIKE', "%{$searchTerm}%")
                    ->get();

        return view('admin.index', ['reservasi' => $reservasis]);
    }
}

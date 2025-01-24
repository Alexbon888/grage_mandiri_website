<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Auth;

class ReservasiController extends Controller
{
    // Method untuk view user
    public function userIndex()
    {
        if (Auth::check()) {
            // Mengambil data reservasi milik user yang sedang login
            $reservasi = Reservasi::where('user_id', Auth::id())->get();
            return view('order.index', compact('reservasi'));
        }
        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }

    // Method untuk view admin
    public function adminIndex()
    {
        // Mengambil semua data reservasi
        $reservasi = Reservasi::all();
        return view('admin.index', compact('reservasi'));
    }

    // Menampilkan form create
    public function create()
    {
        return view('order.create');
    }

    // Menyimpan data reservasi
    public function store(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'alamat' => 'required|string',
            'layanan' => 'required|string',
            'tanggal_reservasi' => 'required|date',
            'plat' => 'required|string|max:10',
            'keluhan' => 'nullable|string',
        ]);

        // Menambahkan user_id ke dalam data yang akan disimpan
        $validatedData['user_id'] = $user->id;

        // Menyimpan data ke tabel reservasi
        Reservasi::create($validatedData);

        return redirect()->route('order.index')->with('success', 'Reservasi Berhasil Dibuat.');
    }

    // Menampilkan detail reservasi
    public function show($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('order.show', compact('reservasi'));
    }

    // Menampilkan form edit
    public function edit(Reservasi $reservasi)
    {
        return view('admin.edit', compact('reservasi'));
    }

    // Mengupdate data reservasi
    public function update(Request $request, Reservasi $reservasi)
    {
        $request->validate([
            'status' => 'string|max:255',
            'item' => 'nullable|string|max:255',
        ]);

        $reservasi->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Reservasi Berhasil Diubah.');
    }

    // Menghapus data reservasi
    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('admin.index')->with('success', 'Reservasi Berhasil Dihapus.');
    }

    // Fitur pencarian
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        $reservasi = Reservasi::where('plat', 'LIKE', "%{$searchTerm}%")
            ->orWhere('status', 'LIKE', "%{$searchTerm}%")
            ->get();

        return view('admin.index', compact('reservasi'));
    }
}

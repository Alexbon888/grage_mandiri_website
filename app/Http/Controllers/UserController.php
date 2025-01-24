<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index()
    {
        $reservasi = Reservasi::where('user_id', Auth::id())->get();
        return view('order.create', compact('reservasi'));
    }
}
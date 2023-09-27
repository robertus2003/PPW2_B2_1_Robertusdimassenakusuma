<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class ControllerBarang extends Controller
{
    // Menampilkan semua barang
    public function index()
    {
        $barang = Barang::all();
        return view('index', compact('barang'));
    }

}
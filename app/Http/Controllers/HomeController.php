<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\Keranjang;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        // $kategori = Kategori::all();
        // $menu = Menu::paginate(6); // Ambil 6 menu per halaman
        // $cart_count = Auth::check() ? Keranjang::where('id_user', Auth::id())->count() : 0;
        // , compact('kategori', 'menu', 'cart_count')
        return view('home.index');
    }
}

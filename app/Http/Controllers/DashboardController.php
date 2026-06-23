<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahProduk = Product::count();

        $jumlahKategori = Category::count();

        $jumlahKlik = 0;

        return view('dashboard', compact(
            'jumlahProduk',
            'jumlahKategori',
            'jumlahKlik'
        ));
    }
}
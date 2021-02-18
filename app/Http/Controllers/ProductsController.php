<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index($produk){
        return ("Halaman ini berisi tentang produk ".$produk); 
    }
}

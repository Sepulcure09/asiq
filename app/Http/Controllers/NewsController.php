<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index($tanggal){
        return ("Berita untuk tanggal ".$tanggal); 
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return ('Selamat Datang');
    }
    public function about(){
        return ('Nama : Irfan Thalib Alfarid </br></br> NIM : 1941720039'); 
    }
    public function article($id){
        return ("Halaman artikel ini ber-id ".$id); 
    }

}

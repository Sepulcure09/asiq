<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){
        return ('Profil Penulis</br></br>Irfan Thalib Alfarid merupakan mahasiswa Jurusan Teknologi Informasi Polinema');
    }
}

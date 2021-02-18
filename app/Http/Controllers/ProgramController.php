<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index($prog){
        return ("Berikut adalah penjelasan mengenai program ".$prog); 
    }
}

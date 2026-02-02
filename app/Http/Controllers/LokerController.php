<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LokerController extends Controller
{
    public function showloker(){
        return view('pages.data-loker');
    }
}

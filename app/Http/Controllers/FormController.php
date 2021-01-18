<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form(){
        return view ('form');
    }

    public function proses(Request $request){
        $deskripsi = $request->input('deskripsi');
        return "Deskripsi : ".$deskripsi."<br>";
    }
}

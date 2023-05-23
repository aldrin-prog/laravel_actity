<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CameraController extends Controller
{
    //
    public function cam($id){
        return view('cameras',['id'=>$id]);
    }
}

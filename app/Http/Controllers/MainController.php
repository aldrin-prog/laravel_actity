<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function pricing(){
        return view('pricing');
    }
    public function showCategory($category){
        return 'Showing posts in the '.$category.' category';
    }
    public function showProfile($id){
        return "Showing profile page of user with ID ".$id;
    }
}

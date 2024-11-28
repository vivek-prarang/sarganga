<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
     public  function index(){
        return view('main.home.index');
     }
     public function collections(){
      return view('main.home.collections');
     }
     public function concept(){
      return view('main.home.concept');
     }
     public function collaborations(){
      return view('main.home.collaborations');
     }
     public function contacts(){
      return view('main.home.contacts');
     }
     public function blogs(){
      return view('main.home.blogs');

     }
     public function site(){
      return view('main.home.site');

     }
}

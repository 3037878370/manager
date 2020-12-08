<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function style(){
        return view('admin.public.style');
    }

    public function script(){
        return view('admin.public.script');
    }

    public function header(){
        return view('admin.public.header');
    }

    public function lefter(){
        return view('admin.public.lefter');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        if(!session()->get('member')){
            return back();
        }
        $admin = session()->get('member');


        return view('admin/index', ['admin', $admin]);
    }
}

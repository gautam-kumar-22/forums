<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('admin.auth');
    }


    public function index()
    {
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        return view('auth.register',$isi);
    }
}

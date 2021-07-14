<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //

    public function __construct()
    {

    }


    public function index()
    {
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        return view('web.form.form_one',$isi);
    }
}

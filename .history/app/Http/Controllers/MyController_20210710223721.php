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
        return view('web.form_one',$isi);
    }



    public function formOnesubmit(Request $request){

        request()->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required'
        ],
        [
            'first_name.required' => 'Please enter the first name!',
            'last_name.required' => 'Please enter the last name!',
            'phone_number.required' => 'Please enter the company name!',
            'email.required' => 'Please enter business information!'

        ] );


    }

}

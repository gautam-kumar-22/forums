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
            'email' => 'required|email'
        ],
        [
            'first_name.required' => 'Please enter the first name!',
            'last_name.required' => 'Please enter the last name!',
            'phone_number.required' => 'Please enter the phone number!',
            'email.required' => 'Please enter email!'

        ] );


        $obj=new FormOne();
        $obj->first_name=$request->first_name;
        $obj->last_name=$request->last_name;
        $obj->phone_number=$request->phone_number;
        $obj->email=$request->email;
        $obj->company_name=$request->company_name;
        if($obj->save()){
            Session::flash('success','Form saved Successfully !');
        }else{
            Session::flash('error','Somthing went wrong !');
        }

        return redirect()->route('form-one');

    }

}

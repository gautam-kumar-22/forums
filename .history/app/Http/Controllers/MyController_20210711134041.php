<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormOne;
use App\Models\Form;
use Session;
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
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
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
        $obj->form_id=1;

        if($obj->save()){
            $OneObj=FormOne::where('form_id', 1)->count();
            $forms=Form::where('id',1)->first();
            $forms->submited_form=$OneObj;
            $forms->save();

            \Mail::to('ravindra5678@mailinator.com')->send(new \App\Mail\SendContactMail($obj));


            Session::flash('success','Form saved Successfully !');
        }else{
            Session::flash('error','Somthing went wrong!');
        }

        return redirect()->route('form-one');

    }

}

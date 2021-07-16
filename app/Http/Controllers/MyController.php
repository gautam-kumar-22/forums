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
        $obj=Form::find('1');
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] =$obj->title;
        return view('web.form_six',$isi);
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

        $iknow_checkbox=$request->iknow_checkbox;
        
        $obj->name_of_gift1=$request->name_of_gift1;
        $obj->quantity_of_gift1=$request->quantity_of_gift1;
        $obj->name_of_gift2=$request->name_of_gift2;
        $obj->quantity_of_gift2=$request->quantity_of_gift2;
        $obj->name_of_gift3=$request->name_of_gift3;
        $obj->quantity_of_gift3=$request->quantity_of_gift3;
        $obj->name_of_gift4=$request->name_of_gift4;
        $obj->quantity_of_gift4=$request->quantity_of_gift4;
        $obj->name_of_gift5=$request->name_of_gift5;
        $obj->quantity_of_gift5=$request->quantity_of_gift5;
        $obj->pickup_delivery_date=$request->pickup_delivery_date;
        $obj->pickup_delivery=$request->pickup_delivery;
        $obj->personalize_gift=$request->personalize_gift;
        $obj->gift_for_corporate=$request->gift_for_corporate;
        $obj->desired_theme=$request->desired_theme;
        $obj->preference_of_basket=$request->preference_of_basket;
        $obj->quantity_of_gift=$request->quantity_of_gift;
        $obj->budget=$request->budget;
        $obj->is_alcohol_required=$request->is_alcohol_required;
        $obj->local_calgary=$request->local_calgary;
        $obj->desired_time=$request->desired_time;
        $obj->anything_else=$request->anything_else;
        $obj->prefer_us=$request->prefer_us;        

        $obj->form_id=1;

        if($obj->save()){
            $OneObj=FormOne::where('form_id', 1)->count();
            $forms=Form::where('id',1)->first();

            $forms->submited_form=$OneObj;
            $forms->save();

            \Mail::to($forms->form_email)->send(new \App\Mail\SendContactMail($obj));


            Session::flash('success','Form saved Successfully !');
        }else{
            Session::flash('error','Somthing went wrong!');
        }

        return redirect()->route('form-one');

    }

}

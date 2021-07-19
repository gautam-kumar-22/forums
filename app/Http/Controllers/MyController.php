<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormOne;
use App\Models\FormTwo;
use App\Models\FormThree;
use App\Models\FormFour;
use App\Models\FormFive;
use App\Models\FormSix;
use App\Models\Form;
use Session;

class MyController extends Controller {

    public function index() {
        $obj = Form::find( '1' );
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] = $obj->title;
        return view( 'web.form_one', $isi );
    }

    public function formOnesubmit( Request $request ) {

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

        $obj = new FormOne();
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->phone_number = $request->phone_number;
        $obj->email = $request->email;
        $obj->company_name = $request->company_name;

        $iknow_checkbox = $request->iknow_checkbox;

        $obj->name_of_gift1 = $request->name_of_gift1;
        $obj->quantity_of_gift1 = $request->quantity_of_gift1;
        $obj->name_of_gift2 = $request->name_of_gift2;
        $obj->quantity_of_gift2 = $request->quantity_of_gift2;
        $obj->name_of_gift3 = $request->name_of_gift3;
        $obj->quantity_of_gift3 = $request->quantity_of_gift3;
        $obj->name_of_gift4 = $request->name_of_gift4;
        $obj->quantity_of_gift4 = $request->quantity_of_gift4;
        $obj->name_of_gift5 = $request->name_of_gift5;
        $obj->quantity_of_gift5 = $request->quantity_of_gift5;
        $obj->pickup_delivery_date = $request->pickup_delivery_date;
        $obj->pickup_delivery = $request->pickup_delivery;
        $obj->personalize_gift = $request->personalize_gift;
        $obj->gift_for_corporate = $request->gift_for_corporate;
        $obj->desired_theme = $request->desired_theme;
        $obj->preference_of_basket = $request->preference_of_basket;
        $obj->quantity_of_gift = $request->quantity_of_gift;
        $obj->budget = $request->budget;
        $obj->is_alcohol_required = $request->is_alcohol_required;
        $obj->local_calgary = $request->local_calgary;
        $obj->desired_time = $request->desired_time;
        $obj->anything_else = $request->anything_else;
        $obj->prefer_us = $request->prefer_us;

        $obj->form_id = 1;

        if ( $obj->save() ) {
            $OneObj = FormOne::where( 'form_id', 1 )->count();
            $forms = Form::where( 'id', 1 )->first();
            $forms->submited_form = $OneObj;
            $forms->save();
            \Mail::to( $forms->form_email )->send( new \App\Mail\SendContactMail( $obj ) );
            Session::flash( 'success', 'Form saved Successfully !' );
        } else {
            Session::flash( 'error', 'Somthing went wrong!' );
        }

        return redirect()->route( 'form-one' );

    }

    // form 2

    public function indexFormTwo() {
        $obj = Form::find( '2' );
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] = $obj->title;
        return view( 'web.form_two', $isi );
    }


    public function formTwosubmit( Request $request ) {

        request()->validate( [
            'bill_first_name' => 'required',
            'bill_last_name' => 'required',
            'bill_email' => 'required|email',
            'bill_street_address' => 'required',
            'bill_city' => 'required',
            'bill_province' => 'required',
            'bill_county_name' => 'required',
            'bill_postal_code' => 'required',

            'ship_first_name' => 'required',
            'ship_last_name' => 'required',
            'ship_street_address' => 'required',
            'ship_city' => 'required',
            'ship_province' => 'required',
            'ship_postal_code' => 'required',
            'ship_number' => 'required',
            'ship_msg' => 'required',
            'ship_pdw' => 'required',
        ],
        [
            'bill_first_name.required' => 'Please enter the first name!',
            'bill_last_name.required' => 'Please enter the last name!',
            'bill_email.required' => 'Please enter email!',
            'bill_street_address.required' => "Please enter street address!",
            'bill_city.required' => "Please enter city!",
            'bill_province.required' => "Please enter province address!",
            'bill_county_name.required' => "Please enter country!",
            'bill_postal_code.required' => "Please enter country!",

            'ship_first_name.required' => 'Please enter the first name!',
            'ship_last_name.required' => 'Please enter the last name!',
            'ship_street_address.required' => "Please enter street address!",
            'ship_city.required' => "Please enter city!",
            'ship_province.required' => "Please enter province address!",
            'ship_number.required' => "Please enter phone number!",
            'ship_pdw.required' => "Please enter preferd dilivery week",
            'ship_msg.required' => "Please enter Ship number!",
            'ship_postal_code.required' => 'Please enter postal code!'

        ] );

        $obj = new FormTwo();
        $obj->bill_first_name = $request->bill_first_name;
        $obj->bill_last_name = $request->bill_last_name;
        $obj->bill_email = $request->bill_email;
        $obj->bill_street_address = $request->bill_street_address;
        $obj->bill_city = $request->bill_city;
        $obj->bill_province = $request->bill_province;
        $obj->bill_county_name = $request->bill_county_name;
        $obj->bill_postal_code = $request->bill_postal_code;
        $obj->ship_first_name = $request->ship_first_name;
        $obj->ship_last_name = $request->ship_last_name;
        $obj->ship_street_address = $request->ship_street_address;
        $obj->ship_city = $request->ship_city;
        $obj->ship_province = $request->ship_province;
        $obj->ship_postal_code = $request->ship_postal_code;
        $obj->ship_number = $request->ship_number;
        $obj->ship_msg = $request->ship_msg;
        $obj->ship_pdw = $request->ship_pdw;
        $obj->ship_company_name = $request->ship_company_name;
        $obj->product = $request->product;
        $obj->ship_order_notes = $request->ship_order_notes;

        $obj->form_id = 2;

        if ( $obj->save() ) {
            $OneObj = FormTwo::where( 'form_id', 2 )->count();
            $forms = Form::where( 'id', 2 )->first();
            $forms->submited_form = $OneObj;
            $forms->save();
            \Mail::to( $forms->form_email )->send( new \App\Mail\SendContactMail( $obj ) );
            Session::flash( 'success', 'Form saved Successfully !' );
        } else {
            Session::flash( 'error', 'Somthing went wrong!' );
        }

        return redirect()->route( 'form-two' );

    }



    // form 3

    public function indexFormThree() {
        $obj = Form::find( '3' );
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] = $obj->title;
        return view( 'web.form_three', $isi );
    }



    public function formThreesubmit( Request $request ) {


        request()->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'bokerage' => 'required',
            'pmi' => 'required'
        ],
        [
            'first_name.required' => 'Please enter the first name!',
            'last_name.required' => 'Please enter the last name!',
            'email.required' => 'Please enter email!',
            'bokerage.required' => "Please enter bokerage",
            'pmi.required' => "Please select program most interested",

        ] );

        $obj = new FormThree();
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->email = $request->email;
        $obj->bokerage = $request->bokerage;
        $obj->pmi = $request->pmi;

        $obj->form_id = 3;

        if ( $obj->save() ) {
            $OneObj = FormThree::where( 'form_id', 3 )->count();
            $forms = Form::where( 'id', 3 )->first();
            $forms->submited_form = $OneObj;
            $forms->save();
            \Mail::to( $forms->form_email )->send( new \App\Mail\SendContactMail( $obj ) );
            Session::flash( 'success', 'Form saved Successfully !' );
        } else {
            Session::flash( 'error', 'Somthing went wrong!' );
        }
        return redirect()->route( 'form-three' );

    }



     // form 4

     public function indexFormFour() {
        $obj = Form::find( '4' );
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] = $obj->title;
        return view( 'web.form_four', $isi );
    }


    public function formFoursubmit( Request $request ) {


        request()->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'company' => 'required'
        ],
        [
            'first_name.required' => 'Please enter the first name!',
            'last_name.required' => 'Please enter the last name!',
            'email.required' => 'Please enter email!',
            'phone_number.required' => "Please enter phone number",
            'company.required' => "Please enter the company Name",

        ] );

        $obj = new FormFour();
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->email = $request->email;
        $obj->phone_number = $request->phone_number;
        $obj->company = $request->company;
        $obj->Other = $request->Other;
        $string='';
        if(!empty($request->personalize_gift)){
            $string=implode(',',$request->personalize_gift);
        }
        $obj->gift_areas=$string;
        $obj->form_id = 4;

        if ( $obj->save() ) {
            $OneObj = FormFour::where( 'form_id', 4 )->count();
            $forms = Form::where( 'id', 4 )->first();
            $forms->submited_form = $OneObj;
            $forms->save();
            \Mail::to( $forms->form_email )->send( new \App\Mail\SendContactMail( $obj ) );
            Session::flash( 'success', 'Form saved Successfully !' );
        } else {
            Session::flash( 'error', 'Somthing went wrong!' );
        }
        return redirect()->route( 'form-four' );

    }


    // form 5

    public function indexFormFive() {

        $obj = Form::find( '5' );
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] = $obj->title;
        return view( 'web.form_five', $isi );
    }

    public function formFivesubmit( Request $request ) {


        request()->validate( [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
            'subject' => 'required'
        ],
        [
            'first_name.required' => 'Please enter the first name!',
            'last_name.required' => 'Please enter the last name!',
            'email.required' => 'Please enter email!',
            'phone_number.required' => "Please enter phone number",
            'subject.required' => "Please enter the subject name",

        ] );


        $obj = new FormFive();
        $obj->first_name = $request->first_name;
        $obj->last_name = $request->last_name;
        $obj->email = $request->email;
        $obj->phone_number = $request->phone_number;
        $obj->subject = $request->subject;
        $obj->message = $request->message;

        $obj->form_id = 5;

        if ( $obj->save() ) {
            $OneObj = FormFive::where( 'form_id', 5 )->count();
            $forms = Form::where( 'id', 5 )->first();
            $forms->submited_form = $OneObj;
            $forms->save();
            \Mail::to( $forms->form_email )->send( new \App\Mail\SendContactMail( $obj ) );
            Session::flash( 'success', 'Form saved Successfully !' );
        } else {
            Session::flash( 'error', 'Somthing went wrong!' );
        }
        return redirect()->route( 'form-five' );

    }



     // form 6

     public function indexFormSix() {

        $obj = Form::find( '6' );
        $isi['count_user'] = '';
        $isi['menu'] = 'menu.v_menu_admin';
        $isi['content'] = 'auth.register';
        $isi['title'] = $obj->title;
        return view( 'web.form_six', $isi );
    }

    public function formSixsubmit( Request $request ) {


        request()->validate( [
            'name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'receipt_name' => 'required'
        ],
        [
            'name.required' => 'Please enter the full name!',
            'gender.required' => 'Please select gender!',
            'email.required' => 'Please enter email!',
            'receipt_name.required' => "Please enter receipt name",

        ] );


        $obj = new FormSix();
        $obj->name = $request->name;
        $obj->gender = $request->gender;
        $obj->email = $request->email;
        $obj->receipt_name = $request->receipt_name;
        $obj->occassion = $request->occassion;
        $obj->date_of_occassion = $request->date_of_occassion;
        $obj->remind_me_days = $request->remind_me_days;
        $obj->remind_me_yearly_once = $request->remind_me_yearly_once;
        $obj->notes = $request->notes;

        $obj->form_id = 6;

        if ( $obj->save() ) {
            $OneObj = FormSix::where( 'form_id', 6 )->count();
            $forms = Form::where( 'id', 6 )->first();
            $forms->submited_form = $OneObj;
            $forms->save();
            \Mail::to( $forms->form_email )->send( new \App\Mail\SendContactMail( $obj ) );
            Session::flash( 'success', 'Form saved Successfully !' );
        } else {
            Session::flash( 'error', 'Somthing went wrong!' );
        }
        return redirect()->route( 'form-six' );

    }

}

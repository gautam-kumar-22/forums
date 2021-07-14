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
            'email' => 'required',
            'c_address' => 'required',
            'c_zip_code' => 'required',
            'c_city' => 'required',
            'c_country' => 'required',
            'phone' => 'required',
            'country_code' => 'required',
        ],
        [
            'fname.required' => 'Please enter the first name!',
            'lname.required' => 'Please enter the last name!',
            'c_name.required' => 'Please enter the company name!',
            'c_function.required' => 'Please enter business information!',
            'c_address.required' => 'Please enter company address!',
            'c_zip_code.required' => 'Please enter the zip code!',
            'c_city.required' => 'Please enter the city name!',
            'c_country.required' => 'Select county first!',
            'phone.required' => 'Please enter the phone number!',
            'country_code.required' => 'Select country code!'

        ] );


    }

}

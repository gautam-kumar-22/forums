<head>
    <style>
        #success-message {
            opacity: 0;
        }

        .col-xs-12.col-sm-12.col-md-12.col-lg-12 {
            padding: 0 20% 0 20%;
        }

        .margin-top-25 {
            margin-top: 25px;
        }

        .form-title {
            padding: 25px;
            font-size: 30px;
            font-weight: 300;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        .form-group .form-control {
            -webkit-box-shadow: none;
            border-bottom: 1px;
            border-style: none none solid none;
            border-radius: 0;
            border-color: #000;
        }

        .form-group .form-control:focus {
            box-shadow: none;
            border-width: 0 0 2px 0;
            border-color: #000;

        }

        textarea {
            resize: none;
            border: 1px solid #cacaca !important;
        }

        input {
            border: 1px solid #cacaca !important;
        }

        .btn-mod.btn-large {
            height: auto;
            padding: 13px 52px;
            font-size: 15px;
        }

        .btn-mod.btn-border {
            color: #000000;
            border: 1px solid #000000;
            background: transparent;
        }

        .btn-mod,
        a.btn-mod {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 4px 13px;
            color: #fff;
            background: rgba(34, 34, 34, .9);
            border: 1px solid transparent;
            font-size: 11px;
            font-weight: 400;
            text-transform: uppercase;
            text-decoration: none;
            letter-spacing: 2px;
            -webkit-border-radius: 0;
            -moz-border-radius: 0;
            border-radius: 0;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            -moz-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            -o-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            -ms-transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
            transition: all 0.2s cubic-bezier(0.000, 0.000, 0.580, 1.000);
        }

        .btn-mod.btn-border:hover,
        .btn-mod.btn-border:active,
        .btn-mod.btn-border:focus,
        .btn-mod.btn-border:active:focus {
            color: #fff;
            border-color: #000;
            background: #000;
            outline: none;
        }

        @media only screen and (max-width: 500px) {
            .btn-mod.btn-large {
                padding: 6px 16px;
                font-size: 11px;
            }

            .form-title {
                font-size: 20px;
            }
        }
    </style>
<title>{{$title}}</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<body>

    <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <h2 class="form-title">
                    Congrats on taking the next step and signing up for our Client for Life real estate program!
                </h2>
                <p>Do you want a system that will help you maintain your client database and keep in touch with your
                    favourite clients? Are you ready to save time and build your referral and repeat business? Let us
                    make you look like a rock star with The Client for Life Program. Our real estate program will
                    automize your anniversary gifts and streamline sending them. We make your life easy, just set it and
                    forget it. </p>
                <p>
                    Set up your FREE consultation for our Client for Life real estate program today! Simply fill out the
                    form below, and one of our expert Designers will contact you within 1-2 business days to set up your
                    FREE personal consultation! It???s that easy!
                </p>
            </div>
        </div>

        @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session()->get('error') }}
        </div>
        @endif

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <form id="contact-form" name="myForm" class="form" action="{{route('form.five.store')}}"
                     method="POST" role="form">
                    {{ csrf_field() }}

                    <div class="iknow_checkbox">


                    <div class="form-group">
                            <label class="form-label" id="pickup_delivery_date_level" for="pickup_delivery_date">First
                                name *</label>
                            <input type="text" class="form-control" id="first_name" name="first_name"
                                placeholder="First Name" value="{{old('first_name','')}}" tabindex="1">
                                <ul>
                                @if($errors->has('first_name'))
                                <li style="color: red">
                                    {{$errors->first('first_name')}}
                                </li>
                                @endif
                            </ul>
                        </div>


                        <div class="form-group">
                            <label class="form-label" id="gift_for_corporate_lbl" for="gift_for_corporate">Last name
                                *</label>
                            <input type="text" class="form-control" id="last_name" name="last_name"
                                placeholder="Last Name" value="{{old('last_name','')}}" tabindex="1">
                                <ul>
                                @if($errors->has('last_name'))
                                <li style="color: red">
                                    {{$errors->first('last_name')}}
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="preference_of_basket_lbl" for="preference_of_basket">Email
                                *</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                                value="{{old('email','')}}" tabindex="1">
                                <ul>
                                @if($errors->has('email'))
                                <li style="color: red">
                                    {{$errors->first('email')}}
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="preference_of_basket_lbl" for="preference_of_basket">Phone
                                Number *</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number"
                                placeholder="phone number" value="{{old('phone_number','')}}" tabindex="1">
                                <ul>
                                @if($errors->has('phone_number'))
                                <li style="color: red">
                                    {{$errors->first('phone_number')}}
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="preference_of_basket_lbl" for="preference_of_basket">Subject
                                *</label>
                            <input type="text" class="form-control" id="subject"
                                name="subject" placeholder="" value="{{old('subject','')}}"
                                tabindex="1">
                                <ul>
                                @if($errors->has('subject'))
                                <li style="color: red">
                                    {{$errors->first('subject')}}
                                </li>
                                @endif
                            </ul>
                        </div>
                        <div class="form-group">
                            <label class="form-label" id="preference_of_basket_lbl"
                                for="preference_of_basket">Message</label>
                            <textarea class="form-control" name="message">{{{ old('message') }}}</textarea>
                        </div>
                    </div>

                    <div class="text-center margin-top-25">
                        <button type="submit" class="btn btn-mod btn-border btn-large">Submit</button>
                    </div>

                </form><!-- End form -->

            </div><!-- End col -->

        </div><!-- End row -->

    </div><!-- End container -->

</body><!-- End body -->


<!-- <script>


function validateForm() {
    var n = document.getElementById('first_name').value;
    var e = document.getElementById('email').value;
    var s = document.getElementById('last_name').value;
    var m = document.getElementById('phone_number').value;
    var onlyLetters =/^[a-zA-Z\s]*$/;
    var onlyEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


    if(n == "" || n == null){
        document.getElementById('nameLabel_first_name').innerHTML = ('Please enter your first name!');
        document.getElementById('first_name').style.borderColor = "red";
        return false;
    }

    if (!n.match(onlyLetters)) {
        document.getElementById('nameLabel_first_name').innerHTML = ('Please enter only letters');
        document.getElementById('first_name').style.borderColor = "red";
        return false;
    }

    if(s == "" || s == null ){
          document.getElementById('nameLabel_last_name').innerHTML = ('Please enter your last name');
          document.getElementById('last_name').style.borderColor = "red";
          return false;
      }

    if (!s.match(onlyLetters)) {
        document.getElementById('nameLabel_last_name').innerHTML = ('Please enter only letters');
        document.getElementById('last_name').style.borderColor = "red";
        return false;
    }



    if(e == "" || e == null ){
          document.getElementById('emailLabel').innerHTML = ('Please enter your email');
          document.getElementById('email').style.borderColor = "red";
          return false;
      }

    if (!e.match(onlyEmail)) {
        document.getElementById('emailLabel').innerHTML = ('Please enter a valid email address');
        document.getElementById('email').style.borderColor = "red";
        return false;
    }



    if(m == "" || m == null){
        document.getElementById('nameLabel_phone_number').innerHTML = ('Please enter your phone number');
        document.getElementById('phone_number').style.borderColor = "red";
        return false;
    }

    else{
          return true;
      }

}




  </script> -->

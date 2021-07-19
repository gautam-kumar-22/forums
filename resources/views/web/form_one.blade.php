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
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}

.form-group .form-control {
  -webkit-box-shadow: none;
  border-bottom: 1px;
  border-style: none none solid none;
  border-radius:0;
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

.btn-mod, a.btn-mod {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 4px 13px;
    color: #fff;
    background: rgba(34,34,34, .9);
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

.btn-mod.btn-border:hover, .btn-mod.btn-border:active, .btn-mod.btn-border:focus, .btn-mod.btn-border:active:focus {
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
<title>{{ $title }}</title>
</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <body>

    <div class="container">

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2 class="form-title">{{ $title }}</h2>
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

              <form id="contact-form" name="myForm" class="form" action="{{route('form.one.store')}}" onsubmit="return validateForm()" method="POST" role="form">
              {{ csrf_field() }}
                  <div class="form-group">
                      <label class="form-label" id="nameLabel_first_name" for="first_name"></label>
                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="{{old('first_name','')}}" tabindex="1">
                        <ul>
                        @if($errors->has('first_name'))
                        <li style="color: red">
                        {{$errors->first('first_name')}}
                        </li>
                        @endif
                        </ul>
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="nameLabel_last_name" for="last_name"></label>
                      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="{{old('last_name','')}}" tabindex="1">
                      <ul>
                        @if($errors->has('last_name'))
                        <li style="color: red">
                        {{$errors->first('last_name')}}
                        </li>
                        @endif
                        </ul>
                    </div>

                  <div class="form-group">
                      <label class="form-label" id="nameLabel_phone_number" for="phone_number"></label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{old('phone_number','')}}" tabindex="1">

                      <ul>
                        @if($errors->has('phone_number'))
                        <li style="color: red">
                        {{$errors->first('phone_number')}}
                        </li>
                        @endif
                        </ul>
                  </div>


                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{old('email','')}}" tabindex="2">

                      <ul>
                        @if($errors->has('email'))
                        <li style="color: red">
                        {{$errors->first('email')}}
                        </li>
                        @endif
                        </ul>
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="company_name" for="company_name"></label>
                      <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company name (optional)" value="{{old('company_name','')}}" tabindex="1">
                  </div>


                  <div class="form-group">
                      <input type="checkbox" class="form-control" id="iknow_checkbox" name="iknow_checkbox" value="1" @if(old('iknow_checkbox')) checked="checked" @endif tabindex="5">
                      <label class="form-label" id="nameLabel" for="iknow_checkbox">I know what I want and I’m ready to order!
(Select this option if you already have all the details of your bulk order) </label>
                  </div>

                  <div class="iknow_checkbox">
                    <div class="form-group">
                      <label class="form-label" id="quantity_of_gift" for="quantity_of_gift">(1) Quantity of Gifts*</label>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name_of_gift1" name="name_of_gift1" placeholder="Name of Gift" value="{{old('name_of_gift1','')}}" tabindex="1">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity_of_gift1" name="quantity_of_gift1" placeholder="Quantity Of gift" value="{{old('quantity_of_gift1','')}}" tabindex="1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name_of_gift2" name="name_of_gift2" placeholder="Name of Gift" value="{{old('name_of_gift2','')}}" tabindex="1">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity_of_gift2" name="quantity_of_gift2" placeholder="Quantity Of gift" value="{{old('quantity_of_gift2','')}}" tabindex="1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name_of_gift3" name="name_of_gift3" placeholder="Name of Gift" value="{{old('name_of_gift3','')}}" tabindex="1">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity_of_gift3" name="quantity_of_gift3" placeholder="Quantity Of gift" value="{{old('quantity_of_gift3','')}}" tabindex="1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name_of_gift3" name="name_of_gift3" placeholder="Name of Gift" value="{{old('name_of_gift3','')}}" tabindex="1">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity_of_gift3" name="quantity_of_gift3" placeholder="Quantity Of gift" value="{{old('quantity_of_gift3','')}}" tabindex="1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name_of_gift4" name="name_of_gift4" placeholder="Name of Gift" value="{{old('name_of_gift4','')}}" tabindex="1">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity_of_gift4" name="quantity_of_gift4" placeholder="Quantity Of gift" value="{{old('quantity_of_gift4','')}}" tabindex="1">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="name_of_gift5" name="name_of_gift5" placeholder="Name of Gift" value="{{old('name_of_gift5','')}}" tabindex="1">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="quantity_of_gift5" name="quantity_of_gift5" placeholder="Quantity Of gift" value="{{old('quantity_of_gift5','')}}" tabindex="1">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="form-label" id="pickup_delivery_date_level" for="pickup_delivery_date">(2) Requested Pick up/Delivery Date*</label>
                      <input type="date" class="form-control" id="pickup_delivery_date" name="pickup_delivery_date" placeholder="Company Requested Pick up/Delivery Date" value="{{old('pickup_delivery_date','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="company_name" for="company_name">(3) Delivery/Pick up*</label>
                    </div>
                    <div class="form-group">
                      <div class="radio">
                        <label><input type="radio" name="pickup_delivery" value="pickup"> Pick up </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="pickup_delivery" value="deliver to my address" > Deliver entire shipment to my address</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="pickup_delivery" value="deliiver direct to recipient"> Delivery direct to recipient</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="personalize_gift_lbl" for="personalize_gift">(4) If I had the chance to personalize these gifts</label>
                      <div class="checkbox">
                        <label><input type="checkbox" name="personalize_gift" value="The gifts would have my slogan or corporate logo (4-6 weeks turnaround time)">The gifts would have my slogan or corporate logo (4-6 weeks turnaround time)</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="personalize_gift" value="The gifts would we wrapped with ribbon in our corporate colors">The gifts would we wrapped with ribbon in our corporate colors</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="personalize_gift" value="The gifts would include our customized / logo’d products (to be ordered, or I would supply)">The gifts would include our customized / logo’d products (to be ordered, or I would supply)</label>
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox" name="personalize_gift" value="Other Idea’s (We will discuss with you!)">Other Idea’s (We will discuss with you!)</label>
                      </div>
                       <div class="form-group">
                        <textarea class="form-control" name="personalize_gift_other_idea" rows="5" id="personalize_gift_other_idea"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="company_name" for="company_name">(5) Next steps</label>
                      <ul>
                        <li>What you can expect next is that we will:</li>
                        <li>a) Verify product availability in the time frame you needs</li>
                        <li>a) Verify product availability in the time frame you needs</li>
                        <li>a) Verify product availability in the time frame you needs</li>
                      </ul>
                    </div>
                  </div>
                  <div class="form-group">
                      <input type="checkbox" class="form-control" id="iamnotsure" name="iamnotsure" value="1" @if(old('iamnotsure')) checked="checked" @endif tabindex="5">
                      <label class="form-label" id="nameLabel" for="iamnotsure">I’m not quite sure yet
(Select this option if your looking to place a bulk order, but you’d like to talk with an Expert Designer about some ideas)</label>
                  </div>


                  <div class="iamnotsure">
                    <div class="form-group">
                      <label class="form-label" id="dont_worry" for="dont_worry">Don’t worry, none of the fields are required! But to best understand your needs, please complete as much as you can</label>
                    </div>

                    <div class="form-group">
                      <label class="form-label" id="gift_details" for="gift_details">(1) Gift Details</label>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="gift_for_corporate_lbl" for="gift_for_corporate">Are the gifts for Corporate, personal, office shareable, other?</label>
                      <input type="text" class="form-control" id="gift_for_corporate" name="gift_for_corporate" placeholder="" value="{{old('gift_for_corporate','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="desired_theme_lbl" for="desired_theme">Is there a desired theme for your gifts?</label>
                      <input type="text" class="form-control" id="desired_theme" name="desired_theme" placeholder="" value="{{old('desired_theme','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="preference_of_basket_lbl" for="preference_of_basket">Do you have a preference of baskets or boxes?</label>
                      <input type="text" class="form-control" id="preference_of_basket" name="preference_of_basket" placeholder="" value="{{old('preference_of_basket','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="quantity_of_gifts" for="quantity_of_gift">Quantity of Gifts</label>
                      <input type="number" min="1" class="form-control" id="quantity_of_gift" name="quantity_of_gift" placeholder="" value="{{old('quantity_of_gift','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="budget" for="budget">Desired budget per gift</label>
                    </div>
                    <div class="form-group">
                      <div class="radio">
                        <label><input type="radio" name="budget" value="$25-$45">$25-$45</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="budget" value="$45-$75">$45-$75</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="budget" value="$75 – $100">$75 – $100</label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="budget" value="$100-$150"> $100-$150 </label>
                      </div>
                      <div class="radio">
                        <label><input type="radio" name="budget" value="$150+">$150+</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="is_alcohol_required_lbl" for="is_alcohol_required">Is alcohol appropriate, not appropriate, required?</label>
                      <input type="text" class="form-control" id="is_alcohol_required" name="is_alcohol_required" placeholder="" value="{{old('is_alcohol_required','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="alcohol_name_lbl" for="alcohol_name">If alcohol is required, what is it you want us to ensure is included?</label>
                      <input type="text" class="form-control" id="alcohol_name" name="alcohol_name" placeholder="" value="{{old('alcohol_name','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="delivery_detail_lbl" for="delivery_detail">(2) Delivery Details</label>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Local Calgary & Area delivery and/or out of town/box & ship delivery?</label>
                      <input type="text" class="form-control" id="local_calgary" name="local_calgary" placeholder="" value="{{old('local_calgary','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="desired_time_lbl" for="desired_time">Desired time frame for delivery</label>
                      <input type="date" class="form-control" id="desired_time" name="desired_time" placeholder="" value="{{old('desired_time','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="anything_else_lbl" for="anything_else">(3) Anything else you’d like us to know?</label>
                      <textarea class="form-control" rows="5" id="anything_else" name="anything_else"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="prefer_us_lbl" for="prefer_us">(4) Would you prefer for us to reach out to you through a phone call or email?</label>
                      <input type="text" class="form-control" id="prefer_us_lbl" name="prefer_us" placeholder="" value="{{old('prefer_us','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="next_step" for="next_step">(5) Next steps</label>
                      <ul>
                        <li>What you can expect next is that we will:</li>
                        <li>a) Review your submission and brainstorm some awesome ideas for you</li>
                        <li>a) Reach out to you via email/phone to discuss your request</li>
                        <li>a) Help you make a lasting impression to your special recipients!</li>
                      </ul>
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


  <script>
    $(document).ready(function(){
      $(".iknow_checkbox, .iamnotsure").hide();
      $("#iknow_checkbox").click(function(){
        $(".iknow_checkbox").toggle();
      });
      $("#iamnotsure").click(function(){
        $(".iamnotsure").toggle();
      });

      var iknw="{{old('iknow_checkbox')}}";
      if(iknw==1){
        $(".iknow_checkbox").toggle();
      }

       var idknw="{{old('iamnotsure')}}";
       if(idknw==1){
        $(".iamnotsure").toggle();
      }
    });


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




  </script>

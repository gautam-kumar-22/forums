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

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <body>

    <div class="container">

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2 class="form-title">{{ $title }} </h2>
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
                      <label class="form-label" id="company_name" for="company_name">Product Name</label>
                      <select class="form-control" name="product">
                        <option>-----</option>
                        <option value="Peaceful Sleigh Day, $59">Peaceful Sleigh Day, $59</option>
                        <option value="Winter Pampering Relax, $114">Winter Pampering – Relax, $114</option>
                        <option value="Winter Pampering Self Care, $82">Winter Pampering – Self Care, $82</option>
                        <option value="Holiday Treat Box, $20">Holiday Treat Box, $20</option>
                        <option value="Snowy Surprise, $53">Snowy Surprise, $53</option>
                        <option value="Cozy And Cuddly For Her, $114">Cozy And Cuddly – For Her, $114</option>
                        <option value="Support Local! Kingdom Coffee Box, $42">Support Local! Kingdom Coffee Box, $42</option>
                        <option value="The Family Memories Collection Cookie Decorating, $110">The Family Memories Collection – Cookie Decorating, $110</option>
                        <option value="Holly And Jolly Office Shareables, $118">Holly And Jolly Office Shareables, $118</option>
                        <option value="Let it Snow Mini, $25">Let it Snow Mini, $25</option>
                        <option value="Let it Snow, $40">Let it Snow, $40</option>
                        <option value="Let it Snow Large, $60">Let it Snow Large, $60</option>
                        <option value="Sip And Savour, Tea Sampler Gift Box, $29">Sip And Savour, Tea Sampler Gift Box, $29</option>
                      </select>
                  </div>


                  <div class="form-group">
                       <label><h2>BILLING DETAILS</h2></label>
                  </div>

                  <div class="iknow_checkbox">
                    

                    <div class="form-group">
                      <label class="form-label" id="pickup_delivery_date_level" for="pickup_delivery_date">First name *</label>
                      <input type="date" class="form-control" id="pickup_delivery_date" name="pickup_delivery_date" placeholder="Company Requested Pick up/Delivery Date" value="{{old('pickup_delivery_date','')}}" tabindex="1">
                    </div>
                    
                    
                    <div class="form-group">
                      <label class="form-label" id="gift_for_corporate_lbl" for="gift_for_corporate">Last name *s</label>
                      <input type="text" class="form-control" id="gift_for_corporate" name="gift_for_corporate" placeholder="" value="{{old('gift_for_corporate','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="desired_theme_lbl" for="desired_theme">Email address*</label>
                      <input type="text" class="form-control" id="desired_theme" name="desired_theme" placeholder="" value="{{old('desired_theme','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="preference_of_basket_lbl" for="preference_of_basket">Street Address *</label>
                      <input type="text" class="form-control" id="preference_of_basket" name="preference_of_basket" placeholder="" value="{{old('preference_of_basket','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="quantity_of_gifts" for="quantity_of_gift">
City *s</label>
                      <input type="number" min="1" class="form-control" id="quantity_of_gift" name="quantity_of_gift" placeholder="" value="{{old('quantity_of_gift','')}}" tabindex="1">
                    </div>
                    
                    <div class="form-group">
                      <label class="form-label" id="is_alcohol_required_lbl" for="is_alcohol_required">
Province *  </label>
                      <input type="text" class="form-control" id="is_alcohol_required" name="is_alcohol_required" placeholder="" value="{{old('is_alcohol_required','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="alcohol_name_lbl" for="alcohol_name">Country *</label>
                      <input type="text" class="form-control" id="alcohol_name" name="alcohol_name" placeholder="" value="{{old('alcohol_name','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Postal Code *</label>
                      <input type="text" class="form-control" id="local_calgary" name="local_calgary" placeholder="" value="{{old('local_calgary','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="desired_time_lbl" for="desired_time"><h2>SHIPPING DETAILS</h2></label>
                    </div>
                    

                    <div class="form-group">
                      <label class="form-label" id="pickup_delivery_date_level" for="pickup_delivery_date">First name *</label>
                      <input type="date" class="form-control" id="pickup_delivery_date" name="pickup_delivery_date" placeholder="Company Requested Pick up/Delivery Date" value="{{old('pickup_delivery_date','')}}" tabindex="1">
                    </div>
                    
                    
                    <div class="form-group">
                      <label class="form-label" id="gift_for_corporate_lbl" for="gift_for_corporate">Last name *s</label>
                      <input type="text" class="form-control" id="gift_for_corporate" name="gift_for_corporate" placeholder="" value="{{old('gift_for_corporate','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="preference_of_basket_lbl" for="preference_of_basket">Street Address *</label>
                      <input type="text" class="form-control" id="preference_of_basket" name="preference_of_basket" placeholder="" value="{{old('preference_of_basket','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="quantity_of_gifts" for="quantity_of_gift">
City *s</label>
                      <input type="number" min="1" class="form-control" id="quantity_of_gift" name="quantity_of_gift" placeholder="" value="{{old('quantity_of_gift','')}}" tabindex="1">
                    </div>
                    
                    <div class="form-group">
                      <label class="form-label" id="is_alcohol_required_lbl" for="is_alcohol_required">
Province *  </label>
                      <input type="text" class="form-control" id="is_alcohol_required" name="is_alcohol_required" placeholder="" value="{{old('is_alcohol_required','')}}" tabindex="1">
                    </div>
                    
                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Postal Code *</label>
                      <input type="text" class="form-control" id="local_calgary" name="local_calgary" placeholder="" value="{{old('local_calgary','')}}" tabindex="1">
                    </div>


                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Company name (optional)</label>
                      <input type="text" class="form-control" id="local_calgary" name="local_calgary" placeholder="" value="{{old('local_calgary','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Recipient Phone Number*</label>
                      <input type="text" class="form-control" id="local_calgary" name="local_calgary" placeholder="" value="{{old('local_calgary','')}}" tabindex="1">
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Preferred Delivery Week* <span>We will arrange for pick up of the gift at our office at the beginning of your preferred delivery week, but we make no guarantees of when the gift will be delivered. You will receive an email once the gift has been delivered from the third party courier</span></label>
                      <input type="text" class="form-control" id="local_calgary" name="local_calgary" placeholder="" value="{{old('local_calgary','')}}" tabindex="1">
                    </div>

                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Gift Tag Message*</label>
                      <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                      <label class="form-label" id="local_calgary_lbl" for="local_calgary">Order Notes (optional)</label>
                      <textarea class="form-control"></textarea>
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

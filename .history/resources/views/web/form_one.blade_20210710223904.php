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

  <body>

    <div class="container">

      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <h2 class="form-title">CONTACT DETAILS</h2>
          </div>
      </div>

      <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

              <form id="contact-form" name="myForm" class="form" action="{{route('form.one.store')}}" onsubmit="return validateForm()" method="POST" role="form">
              {{ csrf_field() }}
                  <div class="form-group">
                      <label class="form-label" id="nameLabel_first_name" for="first_name"></label>
                      <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" tabindex="1">

                      @if($errors->has('first_name'))
        <li style="color: red">
            {{$errors->first('first_name')}}
        </li>
        @endif
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="nameLabel_last_name" for="last_name"></label>
                      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" tabindex="1">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="nameLabel_phone_number" for="phone_number"></label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" tabindex="1">
                  </div>


                  <div class="form-group">
                      <label class="form-label" id="emailLabel" for="email"></label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="nameLabel" for="company_name"></label>
                      <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company name (optional)" tabindex="1">
                  </div>


                  <!-- <div class="form-group">
                      <label class="form-label" id="subjectLabel" for="sublect"></label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3">
                  </div>

                  <div class="form-group">
                      <label class="form-label" id="messageLabel" for="message"></label>
                      <textarea rows="6" cols="60" name="message" class="form-control" id="message" placeholder="Your message" tabindex="4"></textarea>
                  </div> -->

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

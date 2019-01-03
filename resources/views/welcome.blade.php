<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- App CSS -->
        <link href="{{ asset('public/css/app.css') }}?version=2" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{ asset('public/css/main.css?version=2') }}" rel="stylesheet" type="text/css" />

        <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body style="margin-bottom:50px;">

      @include('inc.navbar');

        <div class="container">
          <div class="content">
              <div class="row">
                  <div class="col-sm-12">
                      <h3 class="">Hire Freelancers, Make Things Happen</h3>
                  </div>

                  <div class="clearfix"></div>

                  <div style="margin-top:50px">
                    <div class="col-sm-3">
                        <a href="{{url('category/1')}}" class="categorylink">
                          <img src="{{ asset('public/img/programmer.jpeg') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Programmer</h4>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{url('category/2')}}" class="categorylink">
                          <img src="{{ asset('public/img/designers.jpeg') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Designers</h4>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{url('category/3')}}" class="categorylink">
                          <img src="{{ asset('public/img/plumber.jpg') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Plumbers</h4>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{url('category/4')}}" class="categorylink">
                          <img src="{{ asset('public/img/mechanics.jpg') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Mechanics</h4>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                    <div style="margin-top:50px;"></div>

                    <div class="col-sm-3">
                        <a href="{{url('category/5')}}" class="categorylink">
                          <img src="{{ asset('public/img/electrician.jpg') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Electrician</h4>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{url('category/6')}}" class="categorylink">
                          <img src="{{ asset('public/img/computertechnician.png') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Computer Technician</h4>
                        </a>
                    </div>

                    <div class="col-sm-3">
                        <a href="{{url('category/7')}}" class="categorylink">
                          <img src="{{ asset('public/img/cardriver.jpg') }}" class="imgcategory" />
                          <h4 style="text-align: center;">Driver</h4>
                        </a>
                    </div>
                  </div>

                  <div class="col-sm-3">

                  </div>

                  <div class="clearfix"></div>

                  <div style="margin-top:50px;"></div>

                  <hr />

                  <div class="col-sm-12">
                    <h3>How It Works</h3>
                  </div>

                  <div class="clearfix"></div>

                  <div style="margin-top:50px;"></div>

                  <div class="col-sm-3">
                      <img src="{{ asset('public/img/findfreelancers.jpeg') }}" class="imghowitworks" />
                      <h4 style="text-align: center;">Find a freelancer</h4>
                  </div>

                  <div class="col-sm-3">
                      <img src="{{ asset('public/img/contact.jpg') }}" class="imghowitworks" />
                      <h4 style="text-align: center;">Contact through information given by the freelancer</h4>
                  </div>

                  <div class="col-sm-3">
                      <img src="{{ asset('public/img/collaborate.jpg') }}" class="imghowitworks" />
                      <h4 style="text-align: center;">Collaborate</h4>
                  </div>

                  <div class="col-sm-3">
                      <img src="{{ asset('public/img/payment.jpg') }}" class="imghowitworks" />
                      <h4 style="text-align: center">Payment</h4>
                  </div>


              </div>
          </div>
        </div>

    </body>
</html>

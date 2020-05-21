<?php
?>
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--     Modified By Sundeep--}}

    <link href="{{asset("style/admin-activities.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("style/admin-addProduct.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("style/admin-modifyProduct.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("style/admin-deleteProduct.css")}}" rel="stylesheet" type="text/css">
    {{--     Modified By Sundeep--}}

    <link href="{{asset("style/public-contactUs.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("style/public-contactForm.css")}}" type="text/css" rel="stylesheet" />
    <link href="{{asset("style/public-faq.css")}}" rel="stylesheet" type="text/css">

    <link href="{{asset("style/public-nav-header.css")}}" rel="stylesheet" />
    <link href="{{asset("style/public-footer.css")}}"rel="stylesheet" type="text/css">
    <link href="{{asset("style/public-modal-sign-up.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("style/public-home-body.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("style/shopping-list-flyer.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("style/public-side-nav.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="{{ asset('image/favicon.png') }}" rel="shortcut icon" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ asset('script/public-sign-up.js') }}" type="text/javascript"></script>
    <script src="{{ asset('script/public-browse-flyer.js') }}" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    {{--     Modified By Sundeep--}}
    <style>
        /*Signup*/

        .tab-style {
            font-size: 20px;
            width: 50%;
            text-align: center;

        }

        .nav-tabs > li > a {
            margin-right: 0px;
            color: grey;
        }

        .group2 {
            position: relative;
            margin-top: 16px;
        }

        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover {
            background-color: #e5ecf4;
            color: #4a89dc;
        }

        .login-shadow {
            -webkit-box-shadow: 5px -5px 6px 0px rgba(82, 82, 82, 0.52);
            -moz-box-shadow: 5px -5px 6px 0px rgba(82, 82, 82, 0.52);
            box-shadow: 5px -5px 6px 0px rgba(82, 82, 82, 0.52);
            z-index: 1;

        }

        .signup-shadow {
            -webkit-box-shadow: -5px 0px 6px 0px rgba(82, 82, 82, 0.52);
            -moz-box-shadow: -5px -5px 6px 0px rgba(82, 82, 82, 0.52);
            box-shadow: -5px 0px 6px 0px rgba(82, 82, 82, 0.52);

        }


        .modal-header {
            background-color: #e5ecf4;
        }

        .group {
            position: relative;
            margin-top: 30px;
        }


        .input {
            font-size: 18px;
            padding: 10px 10px 10px 5px;
            -webkit-appearance: none;
            display: block;
            background: none;
            color: #636363;
            width: 100%;
            border: none;
            border-radius: 0;
            border-bottom: 1px solid #757575;
        }

        .input:focus {
            outline: none;
        }


        /* Label */

        .label {
            color: #757575;
            font-size: 18px;
            font-weight: normal;
            position: absolute;
            pointer-events: none;
            left: -10px;
            top: 10px;
            transition: all 0.2s ease;
        }


        /* active */

        .input:focus ~ .label, .input.used ~ .label {
            top: -20px;
            transform: scale(.75);
            left: -15px;
            /* font-size: 14px; */
            color: #4a89dc;
        }


        /* Underline */

        .bar {
            position: relative;
            display: block;
            width: 100%;
        }

        .bar:before, .bar:after {
            content: '';
            height: 2px;
            width: 0;
            bottom: 1px;
            position: absolute;
            background: #4a89dc;
            transition: all 0.2s ease;
        }

        .bar:before {
            left: 50%;
        }

        .bar:after {
            right: 50%;
        }


        /* active */

        .input:focus ~ .bar:before, .input:focus ~ .bar:after {
            width: 50%;
        }


        /* Highlight */

        .highlight {
            position: absolute;
            height: 60%;
            width: 100px;
            top: 25%;
            left: 0;
            pointer-events: none;
            opacity: 0.5;
        }


        /* active */

        .input:focus ~ .highlight {
            animation: inputHighlighter 0.3s ease;
        }

        #confirmsignin, #confirmsignup, #confirmclose {
            width: 100px;
            height: 40px;
        }

        @media screen and (max-width: 767px) and (min-width: 576px) {
            #myModal {
                margin-left: 20%;
                margin-right: 20%;
            }

            #forgot-password {
                margin-left: 20%;
                margin-right: 20%;
            }
        }


        @media screen and (min-width: 768px) {

            #myModal .modal-dialog {
                width: 500px;
            }

            #forgot-password .modal-dialog {
                width: 500px;
            }

            .modal-body {
                padding-left: 50px;
                padding-right: 50px;
            }

            #confirmsignin, #confirmsignup, #confirmclose {
                width: 100px;
                height: 40px;
            }
        }

        .modal-body {
            background-color: white;
        }

        .group > .label, .group2 > .label {
            color: black;
        }

        em {
            display: none;
        }
    </style>
    <title>Klipp</title>
</head>
<body class="mybody">
<header>
    <div class="header">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ url("/home") }}"><img
                            alt="Klipp logo" src="{{asset("image/public-logo.png")}}"/></a>
                </div>
                <div id="navbar3" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="{{ url('/shoppingList') }}">Shopping List</a></li>
                        <li><a class="" href="#public_signup" data-toggle="modal" data-target=".public-log-sign">
                                <i class="fa fa-user-circle-o"></i> Sign Up</a></li>
                        <li><a href="">Flyers</a></li>
                        <li><a href="{{ url("/flyer") }}">Search</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">About Klipp <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="/about_us">About Us</a></li>
                                <li><a href="/video">How to use</a></li>

                                {{--                                Modified By Sundeep--}}
                                <li><a href="/contactUs">Contact Us</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Clients</li>
                                <li><a class="" href="#client_signup" data-toggle="modal" data-target=".client-log-sign">Client
                                        login</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </div>
</header>
<section>
    @yield('content')
</section>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">We help you make informed shopping decisions saving your time and money every
                    week.
                    With Klipp, you can access shopping content like best prices, multi-discounts offered by stores near
                    you
                    and calculating the net cost of your shopping. In addition to this, we also inform you of the travel
                    time and cost of travel
                    depending on your mode of commute. We aim to inform you of the total expenditure of your shopping
                    beforehand.</p>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Quick Links</h6>
                <ul class="footer-links">
                    <li><a href="/location">Locations</a></li>
                    <li><a href="/about_us">About Us</a></li>
                    {{--                    Modified By Sundeep--}}
                    <li><a href="/contactUs">Contact Us</a></li>
                    <li><a href="/video">How to use?</a></li>
                    <li><a class="" href="#client_signup" data-toggle="modal" data-target=".client-log-sign">Client login</a></li>
                    {{--                    Modified By Sundeep--}}
                    <li><a href="/faq">Support</a></li>
                </ul>
            </div>

            <div class="col-xs-6 col-md-3">
                <h6>Returning shopper</h6>
                <ul class="footer-links">
                    <li><a data-toggle="modal" data-target=".public-log-sign">Sign Up</a></li>
                    <li><a href="/favourites">Favourite Items</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2018 All Rights Reserved by
                    <a href="#">The Elite</a>.
                </p>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<!-- Modal -->
<div class="modal fade bs-modal-sm client-log-sign" id="myModal" tabindex="-1" role="dialog"
     aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class=" active tab-style login-shadow "><a href="#signin" data-toggle="tab">Log In</a>
                    </li>
                    <li id="tab2" class=" tab-style "><a href="#client_signup" data-toggle="tab">Sign Up</a></li>

                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" method="post" action="/clientLogin">
                            {{ csrf_field() }}
                            <fieldset>
                                <!-- Sign In Form -->
                                <!-- Text input-->

                                <div class="group">
                                    <input required="" name="email" class="input" type="text"><span class="highlight"></span><span
                                        class="bar"></span>
                                    <label class="label" for="date">Email address</label></div>


                                <!-- Password input-->
                                <div class="group">
                                    <input required="" name="password" class="input" type="password"><span
                                        class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password</label>
                                </div>
                                <em>minimum 6 characters</em>

                                <div class="forgot-link">
                                    <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my
                                        password</a>
                                </div>


                                <!-- Text input: Button-->
                                <div class="group">
                                    <input type="submit" id="confirmsignin" name="confirmsignin"
                                           class="btn btn-primary btn-block" value="Login">
                                </div>
                            </fieldset>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="client_signup">
                        <form class="form-horizontal" method="post" action="/clients">
                            {{ csrf_field() }}
                            <fieldset>
                                <!-- Sign Up Form -->
                                <!-- Text input-->
                                <div class="group">
                                    <input name="name" required="" class="input" type="text"><span class="highlight"></span><span
                                        class="bar"></span>
                                    <label class="label" for="date">Name</label></div>

                                <!-- Text input-->
                                <div class="group">
                                    <input name="email" required="" class="input" type="text"><span class="highlight"></span><span
                                        class="bar"></span>
                                    <label class="label" for="date">Email</label></div>

                                <!-- Text input-->
                                <div class="group">
                                    <input name="password" required="" class="input" type="password"><span
                                        class="highlight"></span><span class="bar"></span>
                                    <label class="label" for="date">Password</label></div>
                                <em>1-8 Characters</em>

                                <!-- Text input-->
                                <div class="group">
                                    <input name="address" required="" class="input" type="text"><span class="highlight"></span><span
                                        class="bar"></span>
                                    <label class="label" for="date">Address</label></div>

                                <div class="group">
                                    <input name="phone" required="" class="input" type="text"><span class="highlight"></span><span
                                        class="bar"></span>
                                    <label class="label" for="date">Phone</label></div>

                                <!-- Text input-->
                                <div class="group">
                                    <input name="postal_code" required="" class="input" type="text"><span class="highlight"></span><span
                                        class="bar"></span>
                                    <label class="label" for="date">Postal Code</label></div>

                                <!-- Text input: Button-->
                                <div class="group">
                                    <input type="submit" id="confirmsignup" name="confirmsignup"
                                           class="btn btn-primary btn-block" value="Sign Up">
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="confirmclose" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade bs-modal-sm public-log-sign" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="bs-example bs-example-tabs">
                <ul id="myTab" class="nav nav-tabs">
                    <li id="tab1" class="tab-style login-shadow active"><a href="#signin" data-toggle="tab">Log In</a></li>
                    <li id="tab2" class=" tab-style "><a href="#public_signup" data-toggle="tab">Sign Up</a></li>

                </ul>
            </div>
            <div class="modal-body">
                <div id="myTabContent" class="tab-content">

                    <div class="tab-pane fade active in" id="signin">
                        <form class="form-horizontal" action="/user/login" method="post">
                            {{ csrf_field() }}

                            <fieldset>
                                <!-- Sign In Form -->
                                <!-- Text input-->

                                <div class="group">
                                    <label class="" for="date">Email address</label></div>
                                    <input required="" class="input" type="text" name="email" value="{{old('email')}}"><span class="highlight"></span><span class="bar"></span>



                                <!-- Password input-->
                                <div class="group">

                                    <label class="" for="date">Password</label>
                                    <input required="" class="input" type="password" name="password" value="{{old('password')}}"><span class="highlight"></span><span class="bar"></span>
                                </div>
                                <em>minimum 6 characters</em>

                                <div class="forgot-link">
                                    <a href="#forgot" data-toggle="modal" data-target="#forgot-password"> I forgot my password</a>
                                </div>


                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="signin"></label>
                                    <div class="controls">
                                        <button id="signin" name="signin" class="btn btn-primary btn-block">Log In</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>


                    <div class="tab-pane fade" id="public_signup">
                        @if($errors->any())
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        @endif
                        <form action="/user/signup" class="form-horizontal" method="post">
                            {{ csrf_field() }}
                            <fieldset>
                                <!-- Sign Up Form -->
                                <!-- Text input-->
                                <div class="group">

                                    <label class="" for="first_name">First Name</label></div>
                                    <input  class="input" type="text"  name="first_name" value="{{old('first_name')}}" required><span class="highlight"></span><span class="bar"></span>

                                <!-- Text input-->
                                <div class="group">
                                    <label class=""  for="last_name">Last Name</label></div>
                                    <input  class="input" type="text" name="last_name" value="{{old('last_name')}}" required><span class="highlight"></span><span class="bar"></span

                                <!-- Password input-->
                                <div class="group">
                                    <label class=""  for="email">Email</label></div>
                                    <input  class="input" type="text" name="email" value="{{old('email')}}"><span class="highlight" required></span><span class="bar"></span>


                                <!-- Text input-->
                                <div class="group">
                                    <label class=""  for="password">Password</label></div>
                                    <input  class="input" type="password" name="password" value="{{old('password')}}" required><span class="highlight"></span><span class="bar"></span>

                                <em>1-8 Characters</em>

                                <div class="group2">
                                    <label class=""  for="phone">Phone</label></div>
                                    <input  class="input" type="text" name="phone" value="{{old('phone')}}" required><span class="highlight"></span><span class="bar"></span>




                                <!-- Button -->
                                <div class="control-group">
                                    <label class="control-label" for="confirmsignup"></label>
                                    <div class="controls">
                                        <button id="confirmsignup"  name="confirmsignup" class="btn btn-primary btn-block">Sign Up</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--modal2-->

<div class="modal fade bs-modal-sm" id="forgot-password" tabindex="0" role="dialog" aria-labelledby="mySmallModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Password will be sent to your email</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="group">
                            <input required="" class="input" type="text"><span class="highlight"></span><span
                                class="bar"></span>
                            <label class="label" for="date">Email address</label></div>


                        <div class="control-group">
                            <label class="control-label" for="forpassword"></label>
                            <div class="controls">
                                <button id="forpasswodr" name="forpassword" class="btn btn-primary btn-block">Send
                                </button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div>

    </div>
</div>




@extends('layouts.public-side-nav')
@section('content-after-side-nav')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="Image/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/homeHeader.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('style/body.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/footer.css') }}" rel="stylesheet" type="text/css" >

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Klipp</title>
</head>
<body class="mybody">


    <div class="grid-container" id="grid-2" style="background:#FFFFFF">
        <div id="item3" class="grid-item"><p><h2>About Us</h2></p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif">This website (“Site”) is provided by Klipp.  Klipp   provides you access to this Site subject to the terms and conditions of this Agreement. Please note that your use of this Site constitutes your unconditional agreement to follow and be bound by these terms and conditions. Klipp reserves the right to update or modify the Agreement at any time without prior notice. If the Agreement has been updated, Klipp will post the new Agreement on this Site and note the date that it was last updated. Your use of this Site following any such posting constitutes your unconditional agreement to follow and be bound by the Agreement as changed.
            </p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif">  Klipp website  and applications (on your computer, mobile device or tablet) (collectively, "Websites”), we and third party advertising companies may use cookies to collect information about your visits to our website and other websites.  The information we collect includes: </p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif"> . products or web pages you view on Websites </p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif"> . products your purchase on Klipp </p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif"> . ads you click on Websites </p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif" >We and third-party advertising companies use this information to place you in general interest categories, which helps us determine what types of advertisements may be of interest to you.</p>
            <h4 style="text-align:justify">Use Of This Site </h4>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif">
                This Site and all its Contents are intended solely for personal, non-commercial use. You may download, copy and print selected portions of the Contents and other downloadable materials displayed on this Site for your personal, non-commercial use only, and provided that you maintain all copyright and other notices contained on the Site or in the Contents. Except as noted above, you may not reproduce, copy, publish, transmit, distribute, display, modify, post, download, create derivative works from, sell or participate in any sale of or exploit in any way, in whole or in part, any of the Contents, this Site or any related software in any form or by any means. Any other use, including the reproduction, modification, distribution, transmission, republication, display, or performance, of the content on this Site is strictly prohibited.
            </p>
            <p style=" text-align:justify;font-size:16px;font-family:Arial, Helvetica, sans-serif"> Store Location : Brampton , Toronto & Ettobioko </p>
            <!--<form name="home-2" method="post" action="">
                <input type="submit" name="submit" value="Browse" id="submit" class="submit-button"/>
            </form>-->
        </div>
        <div id="item4" class="grid-item"><img class="img" src=" {{ asset('image/home2.png') }}" alt="flyers">̥</div>
    </div>


</div>


</body>
</html>
@endsection


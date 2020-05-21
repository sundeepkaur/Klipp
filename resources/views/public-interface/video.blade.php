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

<div class="main-content">





    <div class="grid-container" id="grid-2" style="background:#FFFFFF">
        <div id="item3" class="grid-item"><p><h2>Recent Video </h2></p>
            <iframe width="1200" height="500" src="https://www.youtube.com/embed/E7JS-rRxZns" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


            <!--<form name="home-2" method="post" action="">
                <input type="submit" name="submit" value="Browse" id="submit" class="submit-button"/>
            </form>-->
        </div>

    </div>



</body>
</html>
@endsection

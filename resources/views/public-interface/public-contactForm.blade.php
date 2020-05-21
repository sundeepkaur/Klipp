@extends('layouts.home-nav-footer')
@section('content')
<div id="myWrapper">

    <!--/**
    * main div tag contains the message displayed to user
    */-->
    <div id="result"><h4 style="color:green;">Thank you</h4><h1 style="color: magenta;">{{ $name }}</h1><h4 style="color:green;"> for submitting the message, we will contact you soon.</h4></div>
</div>
@endsection



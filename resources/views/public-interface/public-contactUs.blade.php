@extends('layouts.home-nav-footer')
@section('content')
<div class="container contact">
    <div class="row">
        <div class="col-md-3" id="colFirst">
            <div class="contact-info">
                <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                <h2>Contact Us</h2>
                <h4>We would love to hear from you !</h4>
            </div>
        </div>
        <div class="col-md-9">
            <form class="form-horizontal" method="post" action="/contactUsForm">
                {{ csrf_field() }}
                <div class="contact-form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="fname">First Name:</label>
                    <div class="col-sm-10">
                        <input required="required" type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="lname">Last Name:</label>
                    <div class="col-sm-10">
                        <input required="required" type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input required="required" type="email" class="form-control" id="email" placeholder="Enter Email" name="email" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="comment">Comment:</label>
                    <div class="col-sm-10">
                        <input required="required" type="text" class="form-control" id="comment" placeholder="Enter Comments" name="comment" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input class="btn btn-default" type="submit" id="confirmsubmit" name="confirmsubmit" value="Submit" />
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection


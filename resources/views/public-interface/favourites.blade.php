@extends('layouts.public-side-nav')
@section('content-after-side-nav')




    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">


                    <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12">
                        <div class="col-md-4" style="display:inline-flex">
                            <input class="form-control" name=""search_favourites" type="text" placeholder="Search Flyers or items" aria-label="Search">
                            <a href="{{ url("/favourites-search/")}}"><i class="fa fa-search" aria-hidden="true"  style="font-size:22px;padding-left:4px;padding-top:4px; color: #3F51B5;cursor:pointer;"></i></a>
                        </div>
                    </div>
                    <div style="margin-left:4%; border-bottom: 1px solid royalblue;">
                        <br>
                        <span style="font-size:14px;color:#337ab7;">Favorites</span>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                            <br>
                            <!---
                                <div class="column">
                                    <img src="Image/favorite_flyer1.png" style="width:100%">
                                    <img src="Image/flyer2.jpg" style="width:100%">

                                </div>
                                 <div class="column">
                                    <img src="Image/flyer2.jpg" style="width:100%">=
                                    <img src="Image/flyer1.jpg" style="width:100%">

                                </div>
                            <-->

                            @foreach($user_favourite_items as $s)
                                <div class="col-md-6 col-lg-6">
                                    <i class="fa fa-heart-o" aria-hidden="true" style="top:-15px;position:absolute;right:28px;color:blue;"></i><img src="/image/Favourites/{{$s->image_path}}" style="height:200px;">


                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection

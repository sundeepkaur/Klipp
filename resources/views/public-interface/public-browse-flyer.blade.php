@extends('layouts.public-side-nav')
@section('content-after-side-nav')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-4" style="display:inline-flex">
                        <input class="form-control" type="text" placeholder="Search Flyers or items"
                               aria-label="Search">
                        <i class="fa fa-search" aria-hidden="true"
                           style="font-size:22px;padding-left:4px;padding-top:4px; color: #3F51B5;cursor:pointer;"></i>
                    </div>
                    <button class="btn btn-default" id="menu-toggle" onclick="myToogleFunction()">Show menu</button>
                    <div class="container-fostrap">
                        <div class="content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card">
                                            <a class="img-card" href="">
                                                <img src='Image/browseFlyerThumbnail.jpg' />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href="browseFlyerWalmart.php"> Walmart <p style="font-size:12px">Until Thrusday</p>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="browseFlyerWalmart.php" class="btn btn-link btn-block">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card">
                                            <a class="img-card" href="">
                                                <img src="Image/browseFlyerGaintTiger.jpg" />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href=""> Giant Tiger <p style="font-size:12px">Until Thrusday</p>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="" class="btn btn-link btn-block">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card">
                                            <a class="img-card" href="">
                                                <img src="Image/browseFlyerFoodBasics.jpg" />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href="">Food Basics <p style="font-size:12px">Until Thrusday</p>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="" class="btn btn-link btn-block">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="card">
                                            <a class="img-card" href="">
                                                <img src="Image/browseFlyerNoFrills.jpg" />
                                            </a>
                                            <div class="card-content">
                                                <h4 class="card-title">
                                                    <a href="">No Frills <p style="font-size:12px">Until Thrusday</p>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="card-read-more">
                                                <a href="" class="btn btn-link btn-block">
                                                    View
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
@endsection

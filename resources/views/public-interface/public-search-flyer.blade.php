@extends('layouts.public-side-nav')
@section('content-after-side-nav')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-4" style="display:inline-flex">
                        <form action="{{ url('/flyer/create') }}" method="get" role="search">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input type="text" class="form-control" name="item-name" placeholder="Search items">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search" style="font-size:15px; color: #3F51B5;"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        @if(isset($_POST['item-entry-error']))
                            <?php
                            echo "<p style=color:red"." >".$_POST['item-entry-error']."</p>";
                            ?>
                        @endif
                    </div>
                    <button class="btn btn-default" id="menu-toggle" onclick="myToogleFunction()">Show menu</button>
                    <div class="row">
                        <div id="clipped-flyer">
                            <div class="row text-center text-lg-left">
                                {{--                                {{Session::flush()}}--}}
                                @if(Session::has('BrowseItems'))
                                    <h4>RELATED FLYERS</h4>
                                    @foreach(Session::get('BrowseItems') as $value)
                                        @foreach($value['Flyers Images'] as $flyer)
                                            <form id="myForm">
                                                <div class="col-lg-3 col-md-4 col-6">
                                                    <a href="#" class="d-block mb-4 h-100">
                                                        <img class="img-fluid img-thumbnail"
                                                             src="{{asset($flyer)}}" id="favourite_image" alt="">
                                                    </a>
                                                </div>
                                            </form>
                                        @endforeach
                                    @endforeach
                                @endif
                                @if(Session::has('SideSearchNavResults'))
                                    <h4> MY CLIPPINGS</h4>
                                    @foreach(Session::get('SideSearchNavResults') as $value)
                                        @foreach($value['Flyers Images'] as $flyer)
                                            <form id="myForm">
                                                <div class="col-lg-3 col-md-4 col-6">
                                                    <a href="#" class="d-block mb-4 h-100">
                                                        <img id="flyer_image" class="img-fluid img-thumbnail"
                                                             src="{{asset($flyer)}}"  alt="">
                                                    </a>
                                                </div>
                                            </form>
                                        @endforeach
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function(){
            jQuery('#favourite_image').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/flyers/favourites') }}",
                    method: 'post',
                    data: {
                        flyer_image: jQuery('#flyer_image').val(),
                    },
                    success: function(result){
                        console.log(result);
                    }});
            });
        });
    </script>
@endsection

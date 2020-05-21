@extends('layouts.public-side-nav')
@section('content-after-side-nav')
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-md-4" style="display:inline-flex">
                        <form action="{{ url('/shoppingList/create') }}" method="get" role="search">
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
                    </div>
                    <button class="btn btn-default" id="menu-toggle" onclick="myToogleFunction()">Show menu</button>
                    <div class="row">
                        <div class="project-content">
                            <div class="col-xs-6 col-sm-6">
                                <div id="shopping-list">
                                    <div class="table-responsive">
                                        <h4>MY SHOPPING LIST</h4>
                                        <table id="shoppingListTable" class="table">
                                            {{--                                                {{Session::flush()}}--}}
                                            <form method="post" action="{{ url('/shoppingList/calculate') }}">
                                                {{ csrf_field() }}
                                                @if(Session::has('ShoppingListItem'))
                                                    @foreach(Session::get('ShoppingListItem') as $value)
                                                        <tr id="{{$value['Product Name']}}">
                                                            <td>{{$value['Product Name']}}</td>
                                                            <td>${{$value['Current Price']}}</td>
                                                            <td><input type="submit" name="fav" value="Favourite" class="btn">
                                                                <input type="submit" name="remove" id="remove" value="Remove" class="btn"></td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                                <tr>
                                                    <td><h4>Miscellaneous Cost</h4></td>
                                                    <td><input type="text" value="<?php
                                                        if (isset($_POST['miscellaneous-cost']))
                                                            echo $_POST['miscellaneous-cost']?> "
                                                               name="miscellaneous-cost" placeholder="Amount"></td>
                                                    <td>Not mandatory</td>
                                                    @if(isset($_POST['miscellaneous-cost-error']))
                                                        <?php
                                                        echo "<p style=color:red"." >".$_POST['miscellaneous-cost-error']."</p>";
                                                        ?>
                                                    @endif
                                                </tr>
                                                <tr>
                                                    <td style="color: #009FB7"><h4>Total Amount</h4></td>
                                                    @if(Session::has('ShoppingListTotal'))
                                                        @foreach(Session::get('ShoppingListTotal') as $value)
                                                            <td><input type="text"  value="{{$value['Total']}}" placeholder="Total Amount"></td>
                                                        @endforeach
                                                    @endif
                                                    <td><input type="submit" value="Get Total" name="total"></td>
                                                </tr>
                                            </form>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div id="clipped-flyer">
                                        <div class="row text-center text-lg-left">
                                            <h4> MY CLIPPINGS</h4>
                                            <div id="DisplayImage">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6">
                                <div  id="related-flyer">
                                    <div class="row text-center text-lg-left overflow-auto ">
                                        <h4>RELATED FLYERS</h4>
                                        <form id="flyer-clicked">
                                            @if(Session::has('Flyers'))
                                                @foreach(Session::get('Flyers') as $value)
                                                    @foreach($value['Flyer Images'] as $flyer)
                                                        <div class="col-lg-3 col-md-4 col-6">
                                                            <input  id="{{$flyer}}" type="image" name="submit" value="{{$flyer}}"
                                                                    src="{{asset($flyer)}}" class="image-name img-fluid img-thumbnail" >
                                                        </div>
                                                    @endforeach
                                                @endforeach
                                            @endif
                                        </form>
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
    <!--</div>-->
    <script src="{{ asset('script/public-shopping-list.js') }}" type="text/javascript"></script>
@endsection

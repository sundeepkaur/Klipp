@extends('layouts.home-nav-footer')
@section('content')
    <div class="container contact">
        <div class="row">
            <div class="col-md-3" id="frstColumn">
                <div class="contact-info">
                    <img src="image/add.png" alt="image"/>
                    <h2>Add Products</h2>
                    <h4>Please add products of your choice</h4>
                </div>
            </div>
            <div class="col-md-9">
                <form id="contactF" name="reg" action="/addProduct" method="post">
                    {{ csrf_field() }}
                    <div class="contact-form">
                        {{--<div class="form-group">
                            <label class="control-label col-sm-2" for="uid">User ID:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="uid"
                                       placeholder="Enter User Id" name="uid">
                            </div>
                        </div>--}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="sid">Store ID:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="sid"
                                       placeholder="Enter Stroe Id" name="sid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pname">Product Name:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="pname"
                                       placeholder="Enter Product Name" name="pname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="category">ProdCategory:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="category"
                                       placeholder="Enter Category" name="category">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="cprice">Current Price:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="cprice"
                                       placeholder="Enter Current Price" name="cprice">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="pprice">Previous Price:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="pprice"
                                       placeholder="Enter Previous Price" name="pprice">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="isD">Is Deleted:</label>
                            <div class="col-sm-10">
                                <input required="required" type="text" class="form-control" id="isD"
                                       placeholder="Is Deleted Or not" name="isD">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" name="addPro" class="btn btn-default">Add Product</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



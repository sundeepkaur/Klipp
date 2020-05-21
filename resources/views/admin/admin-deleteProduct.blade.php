@extends('layouts.home-nav-footer')
@section('content')
<div class="container contact">
    <div class="row">
        <div class="col-md-3" id="frstCol">
            <div class="contact-info">
                <img src="image/delete.png" alt="image"/>
                <h2>Delete Products</h2>
                <h4>Please delete products of your choice</h4>
            </div>
        </div>
        <div class="col-md-9">
            <form id="contactF" name="reg" action="/deleteProduct" method="post">
                {{ csrf_field() }}
                <div class="contact-form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="sid">Store ID:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="sid" placeholder="Enter Stroe Id" name="sid"
                                   value="<?php if (isset($storeID)) echo $storeID; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pname">Product Name:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pname" placeholder="Enter Product Name"
                                   autofocus name="pname" value="<?php if (isset($productName)) echo $productName; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="category">Category:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="category" placeholder="Enter Category"
                                   name="category" value="<?php if (isset($category)) echo $category; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="cprice">Current Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="cprice" placeholder="Enter Current Price"
                                   name="cprice" value="<?php if (isset($currentPrice)) echo $currentPrice; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pprice">Previous Price:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pprice" placeholder="Enter Previous Price"
                                   name="pprice" value="<?php if (isset($previousPrice)) echo $previousPrice; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="isD">Is Deleted:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="isD" placeholder="Is Deleted Or not" name="isD"
                                   value="<?php if (isset($isDeleted)) echo $isDeleted; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="deletePro" class="btn btn-default">Delete Product</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

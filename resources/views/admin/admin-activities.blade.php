@extends('layouts.home-nav-footer')
@section('content')
    <div class="container contact">
        <h1>Welcome :<br/>Please Choose your choice from following<br/>What would you like to do:</h1>
        <div class="row">
            <div class="col-md-3" id="firstColumn">
                <form id="contactF" name="reg" action="/clientAdd" method="get">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="btn1" type="submit" name="addPro" class="btn btn-default">Add Product</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3" id="secondCol">
                <form id="contactF" name="reg" action="/clientModify" method="get">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="btn2" type="submit" name="modifyPro" class="btn btn-default">Modify Product</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-3" id="thirdCol">
                <form id="contactF" name="reg" action="/clientDelete" method="get">
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button id="btn3" type="submit" name="deletePro" class="btn btn-default">Delete Product</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection



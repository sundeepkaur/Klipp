@extends('layouts.home-nav-footer')
@section('content')
    <div class="main-content">
        <div class="grid-container" id="grid-1">
            <div id="item1" class="grid-item"><img class="img" src="{{asset("image/home-1.png")}}" alt="Vegetables">̥</div>
            <div id="item2" class="grid-item"><p>Start Saving! Klipp has every Canadian weakly flyer.</p>
                <p>The ultimate shopping list to help you save.</p>
                <form name="home-1" method="post" href="/location">
                    <input type="text" name="postalcode" id="postalcode" placeholder="Your postal code" class="text-box" >
                    <input type="submit" name="submit" value="Start saving" id="submit" class="submit-button"/>
                </form>
                <p>Or</p>
                <p><a href="/location">Find me on maps</a></p>
            </div>
        </div>
        <div class="grid-container" id="grid-2">
            <div id="item3" class="grid-item"><p>
                <h2>All your flyers in one place.</h2></p>
                <p>Discover offers by browsing through weekly flyers from retailers you love,</p>
                <p>or by searching for the item you need.</p>
                <form name="home-2" method="post" action="">
                    <input type="submit" name="submit" value="Browse" id="submit" class="submit-button"/>
                </form>
            </div>
            <div id="item4" class="grid-item"><img class="img" src="{{asset("image/home-2.png")}}" alt="flyers">̥</div>
        </div>
        <div class="grid-container" id="grid-3">
            <div id="item5" class="grid-item"><img class="img" src="{{asset("image/home-3.jpg")}}" alt="shopping list">̥</div>
            <div id="item6" class="grid-item"><p>Plan your shopping trips and maximize your savings with the
                <h3>Ultimate Shopping list</h3></p>
                <form name="home-3" method="post" action="">
                    <input type="submit" name="submit" value="Create a shopping list" id="submit" class="submit-button"/>
                </form>
            </div>
        </div>
        <div class="grid-container-last" id="grid-4">
            <div id="item7" class="grid-item"><p>
                <h3>With <b>search</b>, you can find a specific store, item or brand with ease</h3></p>
                <form name="home-4" method="post" action="">
                    <input type="text" name="searchItem" id="searchItem" placeholder="Search for flyers,items or stores"
                           class="text-box"/>
                    <input type="submit" name="submit" value="Search" id="submit" class="submit-button"/>
                </form>
            </div>
        </div>
    </div>
@endsection



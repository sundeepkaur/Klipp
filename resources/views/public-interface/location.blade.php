@extends('layouts.public-side-nav')
@section('content-after-side-nav')
    <style>
        @media only screen and (min-width: 768px){
            #map {
                width: 100%;
                height: 400px;
                background-color: grey;
            }
        }
    </style>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                    <div style="margin-left:4%; border-bottom: 1px solid royalblue;">
                        <br>
                        <span style="font-size:14px;color:#337ab7;">Flyers for M9W4R3</span>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left:0px;padding-right:0px;padding-top:36px;">
                            <div id="map"></div>
                        </div>
                    </div>

                    <!--Shows the stores name below the map-->
                    <div style="margin-left: 4%;">
                        <p style="font-size: 24px;">Store outlets near me:</p>
                        @foreach($location as $s)

                            <span style="font-size: 19px;">{{ $loop->iteration }}. {{$s->store_name}}</span><br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA6oJwtcPbhDv98AlmcDzTb-i-FdDsfKMI&callback=initMap">
    </script>

    <script>
        // Initialize and add the map
        function initMap() {
            var infoWindow; //location marker to be used
            infoWindow = new google.maps.InfoWindow; // initialization

            // if user accepts the location position
            if (navigator.geolocation) {

                navigator.geolocation.getCurrentPosition(function (position) {

                    // take latitude and longitude in position object
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // gives the co-ordinates of the map to be shown
                    var map = new google.maps.Map(
                        document.getElementById('map'), {zoom: 13, center: pos});

                    //initialized marker - current location
                    var marker = new google.maps.Marker({position: pos, map: map});

                    // custom icon to show store icons
                    var icon = {
                       scale : 1,
                        url : "http://maps.google.com/mapfiles/kml/shapes/ranger_station.png",
                    }
                    @foreach($location as $s)
                        var location_coordinates = {
                            lat: {{$s->latitude}},
                            lng: {{$s->longitude}}
                        };
                        var markeridentification = new google.maps.InfoWindow;
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng({{$s->latitude}}, {{$s->longitude}}),
                            map: map,
                            icon: icon,
                        });

                        // This code shows store name on the marker
                        markeridentification.setPosition(location_coordinates);
                        markeridentification.setContent('{{$s->store_name}}');
                        markeridentification.open(map);

                    @endforeach

                }, function() {
                    handleLocationError(true, infoWindow, map.getCenter()); //handle error
                });
            } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter()); //handle error
            }
        }
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(browserHasGeolocation ?
                'Error: The Geolocation service failed.' :
                'Error: Your browser doesn\'t support geolocation.');
            infoWindow.open(map);
        }

    </script>


@endsection








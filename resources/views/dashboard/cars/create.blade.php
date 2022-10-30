@extends('dashboard.layouts.layout')
@section('title','Add Car')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">

                <div class="breadcrumb">
                    <a href="{{route('dashboard')}}" class="header-title m-t-0 m-b-30"><i class="icon-home2 mr-2"></i>
                        Dashboard</a> /
                    <a href="{{route('cars.index')}}" class="header-title m-t-0 m-b-30"><i
                            class="icon-home2 mr-2"></i>
                        Cars </a> /
                    <span class="breadcrumb-item active">@yield('title')</span>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            @include('dashboard.layouts.status')
                            <h4 class="header-title m-t-0 m-b-30">Add Car</h4>
                            {!!Form::open( ['route' => 'cars.store', 'method' => 'Post','role'=>'form','class'=>'form-horizontal','files'=>true,
                            ]) !!}
                            @include('dashboard.cars.form')
                            {!!Form::close() !!}
                        </div>
                    </div><!-- end col -->
                </div>
            </div>
        </div><!-- end col -->
    </div>

@endsection

@push('scripts')

    <script>


        let map;
        function initMap() {
            const myLatlng = { lat: 25.1925503, lng: 55.2753246 };
            map = new google.maps.Map(document.getElementById("map"), {
                center: myLatlng,
                zoom: 15,
                mapTypeId: 'roadmap',
            });

            const marker = new google.maps.Marker({
                position: myLatlng,
                map,
                draggable: true,
                title: "Click to zoom",
            });

            google.maps.event.addListener(map, "click", function (event) {
                // get lat/lon of click
                var clickLat = event.latLng.lat();
                var clickLon = event.latLng.lng();
                // show in input box
                document.getElementById("lat").value = clickLat.toFixed(7);
                document.getElementById("lng").value = clickLon.toFixed(7);
                /*******************/
                GetLocation(clickLat.toFixed(7), clickLon.toFixed(7));
                /****************/
                var latlng = new google.maps.LatLng(clickLat, clickLon);
                marker.setPosition(latlng);
            });

            function handleEvent(event) {
                document.getElementById('lat').value = event.latLng.lat();
                document.getElementById('lng').value = event.latLng.lng();
                geocodeLatLng(geocoder, map, {lat: parseFloat(event.latLng.lat()), lng: parseFloat(event.latLng.lng())});
            }

        }
    </script>
    <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJcnFWVwTPzVlyAWQ5DwLvUfZKaFGPwHc&callback=initMap">
    </script>

@endpush

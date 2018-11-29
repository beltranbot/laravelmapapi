@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body">
                
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <th>#</th>
                        <th>Address</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($places as $place)
                            <tr>
                                <td>{{$place->id}}</td>
                                <td>{{$place->address}}</td>
                                <td>{{$place->latitude}}</td>
                                <td>{{$place->longitude}}</td>
                                <td>
                                    <a href="/place/{{$place->id}}" class="icon" title="Inspect Place">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            <div class="panel-footer">
                {{$places->links()}}
                <div>
                    <h1 id="mapa-section"><i class="fa fa-map-marker"> </i> Mapa</h1>
                    <div id="map" style="width:100%; height:300px; margin-left:0px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function initMap() {
            let centerLat = 4.437749
            let centerLng = -75.214213
            let center = new google.maps.LatLng(centerLat, centerLng)

            var map = new google.maps.Map(
                document.getElementById('map'),
                {
                    zoom: 15,
                    center
                }
            )
            fetch('/api/place')
            .then(response => {
                return response.json()
            }).then(places => {
                for (const place of places) {
                    var marker = new google.maps.Marker({
                        position: {
                            lat: parseFloat(place.latitude),
                            lng: parseFloat(place.longitude)
                        },
                        map
                    })        
                }
            })
            
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_KEY')}}&callback=initMap">
    </script>
    
@endsection
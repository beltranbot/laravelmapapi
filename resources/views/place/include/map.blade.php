<div>
    <h1 id="mapa-section"><i class="fa fa-map-marker"> </i> Mapa</h1>
    <div id="map" style="width:100%; height:400px; margin-left:0px;"></div>
</div>

@section('scripts')
    <script>
        function initMap() {
            // The location of Uluru
            var place = {
                lat: parseFloat({{$place->latitude}}),
                lng: parseFloat({{$place->longitude}})
            }
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('map'),
                {
                    zoom: 15,
                    center: place
                }
            )
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({
                position: place,
                map
            })
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_KEY')}}&callback=initMap">
    </script>
@endsection
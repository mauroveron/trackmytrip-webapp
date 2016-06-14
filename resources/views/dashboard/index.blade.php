@extends('layouts.master')
@section('content')
    <h1>Dashboard</h1>

    <div id="map" style="width: 100%; height: 400px;">
    </div>

    <div id="actions"></div>

    <div id="table"></div>
@endsection

@section('scripts')
<script>
var map;
console.log('testing');
function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -36.772299649396, lng: 174.71846674904},
        zoom: 12
    });

    $.get('/api/entries').done(function(result) {
        linePath = [];
        for (var i = 0; i < result.data.length; i++) {
            linePath.push({lat: result.data[i].latitude, lng: result.data[i].longitude})
        }
        var line = new google.maps.Polyline({
            path: linePath,
            geodesic: true,
            strokeColor: '#FF0000',
            strokeOpacity: 1.0,
            strokeWeight: 2
        });

        line.setMap(map);
    });
}
</script>
@endsection

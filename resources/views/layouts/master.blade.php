<!DOCTYPE html>
<html>
    <head>
        <title>TrackMyTrip.online</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
    @yield('scripts')
    <script src="https://code.jquery.com/jquery-3.0.0.min.js" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNP399lAVv09ivISNWCbgpxQ_lfxh2x9s&callback=initMap"
    async defer></script>
</html>

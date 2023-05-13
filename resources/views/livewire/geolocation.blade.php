@push('css')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
    integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI="
    crossorigin=""/>
     <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
    integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM="
    crossorigin=""></script>

    <style>
        #map { height: 500px; }
    </style>
@endpush

<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <p>brave dragon</p>
    <div id="map"></div>

    <script>
        let latitude = 0;
        let longitude = 0;
        const scale = 18
        // change style map
        // hybrid: s,h
        // satellite: s
        // streets : m
        // trrain : p
        const tile='m'

        navigator.geolocation.getCurrentPosition(function(location) {
            latitude = location.coords.latitude;
            longitude = location.coords.longitude;
            
            const map = L.map('map').setView([latitude,longitude], scale);
    
            // show map
            L.tileLayer(`https://{s}.google.com/vt/lyrs=${tile}&x={x}&y={y}&z={z}`, {
                maxZoom: 19,
                subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
            }).addTo(map);
    
            // show marker
            var currentLoc = L.icon({
                iconUrl: {!! json_encode(asset('admin/img/icons/pin-icon.png')) !!},
                iconSize:     [40, 60], // size of the icon
                shadowSize:   [50, 64], // size of the shadow
                iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62],  // the same for the shadow
                popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            L.marker([latitude, longitude], {icon: currentLoc}).addTo(map).on('click', function(e) {
                alert(longitude,latitude)
                
            });
        });
        


    </script>
</div>


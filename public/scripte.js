window.onload = function() {

    var map = L.map('myMap').setView([34.50352378920872, 9.352023775781428], 7);
        L.tileLayer('https://tile.openstreetmap.de/{z}/{x}/{y}.png', {
            minZoom: 3,
            maxZoom: 20
        }).addTo(map);
       var circle = L.circle([36.901197096963706, 10.19022313824539], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 50
        }).addTo(map);
        var customIcon = L.icon({
            iconUrl: iconUrl,
            iconSize: [27,45],
            iconAnchor:[13, 42],
            popupAnchor:[0, -37]
        })
        
        var startLocation = [36.901197096963706, 10.19022313824539];
        var endLocation = [someLatitude, someLongitude];

        var marker = L.marker([36.901197096963706, 10.19022313824539],{icon:customIcon}).addTo(map);
        marker.bindPopup("<b>Center Livraison de WeTek</b>")
        var marker = L.marker([someLatitude, someLongitude]).addTo(map);

        L.Routing.control({
            geocoder: L.Control.Geocoder.nominatim(),
            waypoints: [
                L.latLng(startLocation[0], startLocation[1]),
                L.latLng(endLocation[0], endLocation[1])
            ],
            createMarker: function(i, waypoint, n) {
                // Only create a marker for the end location (i.e., waypoint index n - 1)
                if (i === n - 1) {
                    var marker = L.marker(waypoint.latLng, {
                        draggable: true
                        // Add other marker options if needed
                    });
                    return marker;
                }
            }
        }).addTo(map);


}
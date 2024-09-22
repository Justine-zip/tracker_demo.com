var map = L.map('map').setView([14.0680, 120.6300], 15);

var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});

osm.addTo(map);

var marker = L.marker([14.0745944, 120.6259496]).addTo(map);

marker.bindPopup(`Latitude: ${marker.getLatLng().lat}, Longitude: ${marker.getLatLng().lng}`);


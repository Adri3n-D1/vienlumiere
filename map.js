var carte = L.map('section-location', {gestureHandling: true}).setView([42.587637, 3.003726], 12);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(carte);

var marker = L.marker([42.587637, 3.003726]);

marker.addTo(carte);

marker.bindPopup('Éloïse Delcros,<br>Magnétiseuse Énergéticienne');

var mapopup = marker.getPopup();

marker.openPopup();

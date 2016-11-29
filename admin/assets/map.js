var mymap = L.map('mapid').setView([30.504358, -90.461197], 9);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: 'LeoGeo'
}).addTo(mymap);

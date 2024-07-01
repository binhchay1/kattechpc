function initMap() {
    const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 5,
        center: myLatLng,
    });

    new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Kattech PC!",
    });
}

window.initMap = initMap;

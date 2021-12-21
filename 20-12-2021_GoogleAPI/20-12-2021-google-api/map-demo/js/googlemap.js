function loadMap(){
    var ahmedabad = {lat: 23.0225, lng: 72.5714};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: ahmedabad
    });

    var marker = new google.maps.Marker({
        position: ahmedabad,
        map: map
    });
}

function initMap() {
    var myLatLng = {lat: 47.4979, lng: 19.0402}; // Budapest koordinátái
    var map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 12
    });
    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Budapest'
    });
  }
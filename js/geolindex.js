
   var watchId = null;
   function geoloc() {
   if (navigator.geolocation) {
      var optn = {
            enableHighAccuracy : true,
            timeout : Infinity,
            maximumAge : 0
      };
   watchId = navigator.geolocation.watchPosition(showPosition, showError, optn);
   } else {
         alert('Geolocation is not supported in your browser');
   }
   }
function showPosition(position) {
      var googlePos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      var mapOptions = {
         zoom : 12,
         center : googlePos,
         mapTypeId : google.maps.MapTypeId.ROADMAP
      };
      var mapObj = document.getElementById('mapdiv');
      var googleMap = new google.maps.Map(mapObj, mapOptions);
      var markerOpt = {
         map : googleMap,
         position : googlePos,
         title : 'Hi , I am here',
         animation : google.maps.Animation.DROP
      };
      var googleMarker = new google.maps.Marker(markerOpt);
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode({
         'latLng' : googlePos
         }, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
            if (results[1]) {
               var popOpts = {
                  content : results[1].formatted_address,
                  position : googlePos
               };
            var popup = new google.maps.InfoWindow(popOpts);
            google.maps.event.addListener(googleMarker, 'click', function() {
            popup.open(googleMap);
         });
            } else {
               alert('No results found');
            }
            } else {
               alert('Geocoder failed due to: ' + status);
            }
         });
         }
         function stopWatch() {
            if (watchId) {
               navigator.geolocation.clearWatch(watchId);
               watchId = null;

            }
         }
      function showError(error) {
      var err = document.getElementById('mapdiv');
      switch(error.code) {
      case error.PERMISSION_DENIED:
      err.innerHTML = "Usuario negó la solicitud de Geolocalización."
      break;
      case error.POSITION_UNAVAILABLE:
      err.innerHTML = "La información de ubicación está disponible."
      break;
      case error.TIMEOUT:
      err.innerHTML = "La solicitud para obtener la ubicación del usuario Tiempo de espera agotado."
      break;
      case error.UNKNOWN_ERROR:
      err.innerHTML = "Un error desconocido ocurrió."
      break;
      }
      }
      
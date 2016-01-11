   function informacion (coordenadas) {
      $("#latitude").html(coordenadas.Lat);
      $("#longitude").html(coordenadas.Lng);
   }
   
   function iniciar() {
      
      var coordenadas = {
         Lat: 0,
         Lng: 0
      };
      
      function localizacion (posicion) {
         coordenadas = {
            Lat: posicion.coords.latitude,
            Lng: posicion.coords.longitude
         }
         
         informacion(coordenadas);
         
         var mapOptions = {
            zoom: 16,
            center: new google.maps.LatLng(coordenadas.Lat, coordenadas.Lng),
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
         }
         
         var map = new google.maps.Map(document.getElementById('mapa'), mapOptions);
         
         var infowindow = new google.maps.InfoWindow({
            map: map,
            position: new google.maps.LatLng(coordenadas.Lat, coordenadas.Lng),
            content: 'Tu ubicación (geolocation) usando HTML5 y Google Maps.'
            });
      }
      
      function errores (error) {
         alert('Ha ocurrido un error al intentar obtener la información');
      }
      
      if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(localizacion,errores);
      } else {
         alert("Tu navegador no soporta o no tiene habilitada la 'Geolocalización'");
      }
      
   }

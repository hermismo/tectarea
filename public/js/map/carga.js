 var map;
    $(document).ready(function(){
      map = new GMaps({
        el: '#map',
        zoom: 6,
        lat: 40.40911993,
        lng: -3.8271738
      });
      $('#geocoding_form').submit(function(e){
        e.preventDefault();
        
        GMaps.geocode({
          address: $('#address').val().trim(),
          callback: function(results, status){
            if(status=='OK'){     
                
              var latlng = results[0].geometry.location;
              map.setCenter(latlng.lat(), latlng.lng());
              map.addMarker({
                lat: latlng.lat(),
                lng: latlng.lng()
              });

            }

          }
        });
      });

    });

    

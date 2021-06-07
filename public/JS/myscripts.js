
// Toggle Search Button
$(document).ready(function() {
    
      
    //toggle searche button
    $('#search').keyup(function() {
  
      var empty = false;
      $('#search').each(function() {
          if ($(this).val().length == 0) {
              empty = true;
          }
      });                   
  
      if (empty) {
          $('#search_btn').attr('disabled', 'disabled');
      } else {
          $('#search_btn').removeAttr('disabled');
      }                
    });
  });


// Geonames recherche
     

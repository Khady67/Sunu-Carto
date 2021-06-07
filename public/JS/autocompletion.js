/*function getRandomIntInclusive(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min +1)) + min;
}
var jj=getRandomIntInclusive(2,3);

if (jj== 2) {
    result = 'https://secure.geonames.org/searchJSON?country=sn&username=valentinkiba';

  } 

if (jj== 3) {
    result = 'https://secure.geonames.org/searchJSON?country=sn&username=valentinkiba1';

  } 

  $(document).ready(function(){

   
    $('#search').autocomplete({
     source: function(query, reponse)
     {
      $.ajax({
       url:'https://secure.geonames.org/searchJSON?country=sn&username=valentinkiba1',
       
       dataType:"json",
       data : {
         name_startsWith : $('#search').val(),
         maxRows: 15,
         minLenght:1,
       },
         
         success : function(donnee){
                   
                   reponse($.map(donnee.geonames, function(objet, i){
                      
                       return {value: '' + objet.name + ', ' + objet.adminName1 + '', lat: objet.lat, long: objet.lng,}; // on retourne cette forme de suggestion
                   }));
               }
         
        
      })
     },
    
     select: function(event, ui){
       $('#lat1').val(ui.item.lat);
       $('#long1').val(ui.item.long);
     }
     
    });
    
    });*/

    $('#search').autocomplete({
        autoFocus: true,
        delay: 200,
        minLength: 2,
        select: function(event,ui) {
            $('#lat1').val(ui.item.lat);
            $('#long1').val(ui.item.lng);
            return false;
        },
        
        source: function (request, response) {
            $.ajax({
                url: 'https://secure.geonames.org/searchJSON?country=sn&username=valentinkiba1',
                data: request,
                success: response,
                dataType: 'json',
                error: function () {
                    response([]);
                }
               
            })
        }
    });
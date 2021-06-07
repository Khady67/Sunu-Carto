 
      //extension des icons
      var LeafIcon = L.Icon.extend({
        options: {
          iconSize: [18, 18],
          shadowSize: [25, 32]
        }
      });
      //fin extension de l'icon
      var orange_icon = new LeafIcon({iconUrl:"images/orange_antenna_icon.png"});
      var free_icon = new LeafIcon({iconUrl:"images/red_antenna_icon.png"});
      var expresso_icon = new LeafIcon({iconUrl:"images/purple_antenna_icon.png"});
      //var orange_fh = new LeafIcon({iconUrl:'https://sunucarto.artp.sn/assets/img/orange_fh.svg'});
      //var free_fh = new LeafIcon({iconUrl:'https://sunucarto.artp.sn/assets/img/free_fh.svg'});
      //var expresso_fh = new LeafIcon({iconUrl:'https://sunucarto.artp.sn/assets/img/expresso_fh.svg'});
      var free_bts = new LeafIcon({iconUrl:"images/red_antenna_icon.png"});
      var expresso_bts = new LeafIcon({iconUrl:"images/purple_antenna_icon.png"});
      var icone_associative_communautaire = new  LeafIcon({iconUrl:"images/blue_radio_icon.png"});
      var icone_communautaire = new  LeafIcon({iconUrl:"images/green_radio_icon.png"});
      var icone_commerciale = new  LeafIcon({iconUrl:"images/pink_radio_icon.png"});
      var icone_etrangere = new  LeafIcon({iconUrl:"images/indigo_radio_icon.png"});
      var icone_publique = new  LeafIcon({iconUrl:"images/orange_radio_icon.png"});
      var icone_associative = new  LeafIcon({iconUrl:"images/yello_radio_icon.png"});
      var icone_tnt = new  LeafIcon({iconUrl:"images/TV_icone.jpg"});

      var basemaps = {
      OSM : L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
     }),
     Satellite : L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery Â© <a href="https://www.mapbox.com/">Mapbox</a>',
      maxZoom: 18,
      id: 'mapbox/satellite-v9',
      tileSize: 512,
      zoomOffset: -1,
      accessToken: 'pk.eyJ1Ijoia2hhZHkiLCJhIjoiY2twaWk0YzN4MDJuaDMwbGcydmN0eGl5eCJ9.qrrWhjg3rJ3eJrx8pgrcYQ'
      })
    };

    console.log(basemaps);
  
    var groups = {
      /*orange: new L.LayerGroup(),
      free: new L.LayerGroup(),
      expresso: new L.LayerGroup(),*/
      deux_g_orange: new L.LayerGroup(),
      trois_g_orange: new L.LayerGroup(),
      quatre_g_orange: new L.LayerGroup(),
      //fh_orange: new L.LayerGroup(),
      deux_g_free: new L.LayerGroup(),
      trois_g_free: new L.LayerGroup(),
      quatre_g_free: new L.LayerGroup(),
      //fh_free: new L.LayerGroup(),
      deux_g_expr: new L.LayerGroup(),
      trois_g_expr: new L.LayerGroup(),
     // quatre_g_expr: new L.LayerGroup(),
     // fh_expr: new L.LayerGroup(),
    };

    window.ExampleData = {
      LayerGroups: groups,
      Basemaps: basemaps
    };
  
 
  
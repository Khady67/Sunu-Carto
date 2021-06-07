<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title',config('app.name'))</title>
    <meta name="description" content="Projet Sunu Carto: Cartographie des antennes de réseaux mobiles 2G, 3G et 4G de tous les départements du Sénégal">
    <link rel="stylesheet" href="{{asset('/styles/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <!-- CSS et JS pour le clustering Leafleat -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.Default.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/styles/bootstrap-cosmo.css')}}">
    <link rel="stylesheet" href="{{asset('/styles/leaflet.groupedlayercontrol.css')}}">
    <link rel="stylesheet" href="{{asset('/styles/mystyles.css')}}">
    <link rel="stylesheet" href="{{asset('/styles/css-loader.css')}}">
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-6TVTLEV6XV"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-6TVTLEV6XV');
    </script>-->
    
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}">
    <link type="text/css" href="{{asset('JS/jquery-ui/css/smoothness/jquery-ui-1.10.3.custom.css')}}" rel="stylesheet" />
 
    
   
</head>

<script>
// Add active class to the current button (highlight it)
var liste = document.getElementById("nav");
var liens = liste.getElementsByClassName("nav-item");
for (var i = 0; i < liens.length; i++) {
  liens[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
  this.className += " active";
  });
}
</script>

<body>
<nav class="navbar navbar-light navbar-expand-lg shadow-sm clean-navbar" style="padding-bottom: 5px;padding-top: 5px;">
    <div class="container-fluid">
       <a href="/">
        <img src="{{asset('/images/logoArtp.jpg')}}" width="100px" style="margin: 10px;"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></a>
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto" id="nav">
                <li class="nav-item active" role="presentation"><a class="nav-link" href="{{ route('accueil') }}">Accueil</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('réseaux_mobiles') }}">Réseaux Mobiles</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('fm_tv') }}">FM-TV</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('a_propos') }}">A PROPOS</a></li>
            </ul>
            <img src="{{asset('/images/drapeau_senegal.png')}}" width='50px' alt="drapeau_senegal">
        </div>
    </div>
</nav>  
    
@yield('content')

<footer style="margin-top: 0; height: auto; padding-top: 20px">
      <img src="{{asset('/images/logo_artp2.png')}}" width="100px" height="100px" style="display: block;
       margin-right: auto; margin-left: auto; "> <br><br>
        <div class="row">
            <div class="col-sm-6 col-md-4 footer-navigation">
                <p class="links">
                    <a href="{{ route('accueil') }}">Accueil</a> <strong>&middot</strong>
                    <a href="{{ route('réseaux_mobiles') }}">Réseaux mobiles</a> <strong>&middot</strong>
                    <a href="{{ route('fm_tv') }}">FM-TV</a> <strong>&middot</strong>
                    <a href="{{ route('a_propos') }}">A propos</a> 
                </p>
                <div class="social-links social-icons">
                    <a href="https://www.facebook.com/Autorit%C3%A9-de-R%C3%A9gulation-des-T%C3%A9l%C3%A9communications-et-des-Postes-du-S%C3%A9n%C3%A9gal-101675521472510/">  <i class="fa fa-facebook"></i>
                    </a><a href="https://twitter.com/artp_senegal?lang=fr"><i class="fa fa-twitter"></i>
                    </a><a href="https://www.linkedin.com/company/artp-senegal"><i class="fa fa-linkedin"></i>
                    </a>
                </div>
            <p class="company-name">Autorité de Régulation des Télécommunications et des Postes © 2020</p>
        </div>
        <div class="col-sm-6 col-md-4 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span> ARTP
                <p><span class="new-line-span">Ouakam, Mamelles, Routes des Almadies, Immeubles ARTP</span> Dakar, Sénégal</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left"> +221 33 869 03 69</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> <a href="#" target="_blank">contact@artp.sn</a></p>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-md-4 footer-about">
            <h4>Sunu Carto - ARTP</h4>
            <p>Cartographie des antennes de réseaux mobiles 2G, 3G et 4G de tous les départements du Sénégal.&nbsp;<br><br></p>
            <p>Retrouvez l'emplacement des antennes radios<br>Vérifiez si votre zone est couverte en 2G, 3G ou 4G<br>
              <br></p>
              <br>
              <br>
            <div>Date de la dernière mise à jour 06/02/2020</div>
        </div>
                        
        </div>
        
    </footer>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="{{asset('JS/script.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
   <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js'></script>
   <script src="{{asset('JS/groupedlayercontrol.js')}}"> </script>
   <script src="{{asset('JS/exampledata.js')}}"> </script>
   <script src="{{asset('JS/myscripts.js')}}"> </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
   @yield('script_content') 
    
     
</body>
    
    
</html>


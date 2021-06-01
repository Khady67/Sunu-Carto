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
    <link rel="stylesheet" href="https://sunucarto.artp.sn/css/bootstrap-cosmo.css">
    <link rel="stylesheet" href="{{asset('/styles/style.css')}}">

</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg shadow-sm clean-navbar" style="padding-bottom: 5px;padding-top: 5px;">
    <div class="container-fluid">
       <a href="/">
        <img src="{{asset('/images/logoArtp.jpg')}}" width="100px" style="margin: 10px;"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"></a>
            <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav ml-auto">
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

</body>
</html>


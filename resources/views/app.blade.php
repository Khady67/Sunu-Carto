<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>@yield('title',config('app.name'))</title>
    <meta name="description" content="Projet Sunu Carto: Cartographie des antennes de réseaux mobiles 2G, 3G et 4G de tous les départements du Sénégal">
</head>

<body>
    <nav>
        <div>
            <img src="{{asset('/images/logoArtp.jpg')}}"></a>  
            <div>
                <ul>
                    <li><a href="{{ route('accueil') }}">Accueil</a></li>
                    <li><a href="{{ route('réseaux_mobiles') }}">Réseaux Mobiles</a></li>
                    <li><a href="{{ route('fm_tv') }}">FM-TV</a></li>
                    <li><a href="{{ route('a_propos') }}">A PROPOS</a></li>
                </ul>
            </div>
        </div>
    </nav> 


@yield('content')

<footer>
        <div>
            <div>
                <p>
                    <a href="{{ route('accueil') }}">Accueil</a> <strong>&middot</strong>
                    <a href="{{ route('réseaux_mobiles') }}">Réseaux mobiles</a> <strong>&middot</strong>
                    <a href="{{ route('fm_tv') }}">FM-TV</a> <strong>&middot</strong>
                    <a href="{{ route('a_propos') }}">A propos</a> 
                </p>
                
                <p>Autorité de Régulation des Télécommunications et des Postes © 2020</p>
        </div>
        <div>
            <div><span>ARTP</span> 
                <p><span>Ouakam, Mamelles, Routes des Almadies, Immeubles ARTP</span> Dakar, Sénégal</p>
            </div>
                <p> +221 33 869 03 69</p>
            </div>
                <p> <a href="#" target="_blank">contact@artp.sn</a></p>
            </div>
        </div>
        <div>
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
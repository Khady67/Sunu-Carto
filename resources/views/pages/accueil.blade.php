@extends('app')

@section('content')

@section('title', 'Accueil - Autorité de Régulation des Télécommunications et des Postes')


<main class="page landing-page">
    <section class="clean-block clean-hero" style="background-image: url(&quot;/images/bg_telecom3.jpg&quot;);color: rgba(9,162,255,0);background-size: cover;min-height: 500px;">
        <div class="text">
            <h1 style="font-size: 40px;line-height: 30px;font-weight: bold;font-style: normal;filter: blur(0px) brightness(100%) contrast(100%) grayscale(50%) hue-rotate(0deg);text-shadow:1px 1px 2px black;">Sunu Carto</h1>
            <p style="filter: hue-rotate(0deg);text-shadow: 1px 1px 2px black;color: #efefef;">Cartographie des antennes de réseaux mobiles 2G, 3G et 4G de tous les départements du Sénégal.&nbsp;<br>Retrouvez l'emplacement des antennes radios<br>Vérifiez si votre zone est couverte en 2G, 3G ou 4G</p>
            <p>
                <form class="form-inline justify-content-center" action="#" method="POST">
                        <input type="hidden" name="_token" value="6Ww67IVCAklWj6bi2DVThv5SeKVTljaUYziiSv2X">         
                        <input id="search" type="text" class="form-control col-sm-6" name="search"  placeholder= "Rechercher les stations dans votre zone"/>
                        <input id="lat1"  type="hidden" name="lat1" value="" />
                        <input id="long1" type="hidden" name="long1" value="" />
                        <button id="search_btn" class="btn btn-success" disabled="true" type="submit">Rechercher</button>
                </form>
           </p>
           <a href="/apropos" class="btn btn-outline-light btn-lg">En savoir plus</a>
        </div>
            
    </section>
    <section class="clean-block features" style="height:auto;">
        <div class="container">
            <br>
                <div class="block-heading" style="padding: 10px 0px 0px;">
                        <h2 class="text-info">Fonctionnalités</h2>
                        <p>Retrouvez la cartographie des antennes radios sur tous les départements du Sénégal. Explorez la couverture de votre zone. Consultez les radios FM et les TV dans votre localité.</p>
                </div>

                <div class="row justify-content-center">
                        <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4 class="text-center">
                                <a href="{{ route('réseaux_mobiles') }}">Réseaux mobiles</a>
                        </h4>
                        <p>Consultez les stations de réseaux mobiles des opérateurs de télécommunications titulaires de Licence dans tous les 45 départements.</p>
                </div>

                <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                    <h4 class="text-center">
                        <a href="{{ route('fm_tv') }}">FM-TV</a>   
                    </h4>
                    <p>Explorez les radios FM et les télévisions émettant dans votre zone.</p>
                </div>
               
        </div>
    </section>
</main>
@endsection
 


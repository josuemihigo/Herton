@extends('layouts.app')

@section('content')

<!-- contents -->
<section class="hk-sec-wrapper">
    <div class="container d-flex justify-content-center align-items-center">
        <img src="dist/img/formation.jpg" alt="formation" width="150%"></i>
        <h1> <strong>Pibas ACADEMIA</strong> Plateforme de préparation au <strong>monde professionnel</strong> </h1>
    </div>
</section>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10 mt-3">
        <div class="row mb-3">

            <div class="col-6 text-right border-right border-secondary">
                <h3 class="text-primary ">PiBas ACADEMIA</h3><br>
                <p class="mb-40">PiBas ACADEMIA est un centre d’excellence qui permet aux diplômés d’avoir un bagage
                    exigé pour faire face aux
                    défis qui dominent le monde du travail. Ce bagage consiste pour l’instant d’abord en l’apprentissage
                    de l’anglais de
                    base, de l’informatique bureautique ainsi que de l’entrepreneuriat. L’entrepreneuriat est instauré
                    ici pour permettre
                    aux apprenants ayant eu une connaissance leur permettant de pouvoir travailler, de commencer à créer
                    leur propre
                    business qui peut marcher beaucoup plus facilement, plus que le travail qu’ils auraient eu s’ils
                    étaient embauchés, bien
                    que ceci reste une probabilité. Et dans le cadre pratique, ces apprenants disposent d’une
                    possibilité de pouvoir être
                    accompagné par les partenaires de PiBas ACADEMIA pour leur offrir des prêts d’argent remboursables
                    qui peuvent les aider
                    à démarrer leur business. Les avantages de ce prêt ici sont tels que, pour l’avoir dans certaines
                    conditions vous n’êtes
                    pas nécessairement obligés de donner des gages ou des hypothèques comme garantie de paiement de
                    votre créance, mais
                    aussi il s’agit d’un prêt qui va vous arriver pendant que vous avez déjà eu une formation suffisante
                    en entrepreneuriat
                    pouvant vous permettre d’émerger en évitant des risques à ne pas prendre.</p>
            </div>
            <div class="col-6 text-left">
                <h3 class="text-primary ">Qui est concerné par le programme</h3><br>
                <p class="mb-40">Ce programme ne concerne pas exclusivement que les jeun es diplômés car il n’y a pas
                    qu’eux qui ont besoin de créer de
                    l’emploi ; il concerne tout le monde désireux de gagner de l’argent, tels qu’on peut le voir
                    avec :<br>
                    <strong>Les travailleurs</strong> qui ont besoin d’avoir une autre source de revenu, <br>
                    <strong>Les chômeurs</strong> qui ont besoin d’une occupation importante (c’est à dire qui ne pas
                    futile parce que contribuant à former
                    la population et faire gagner de l’argent aux gens) et cela sans travailler pour personne
                    (c’est-à-dire en étant son
                    propre patron),<br>
                    <strong>Les étudiants</strong> désireux de gagner de l’argent en étudiant avec une garantie de
                    pouvoir bénéficier des formations aux
                    moments qu’il choisira, tout en précisant que ceci peut aussi paraitre bénéfique pour eux dans le
                    fait qu’ils peuvent
                    finir leurs études directement avec un montant considérable leur permettant d’entreprendre tout en
                    ayant la possibilité
                    d’avoir un prêt d’argent ;<br>
                    <strong>Les commerçants</strong> désireux d’augmenter leur capital,
                    Les travailleurs désireux de demeurer travailleurs salariés : Ils bénéficient d’une formation de
                    qualité et de
                    réputation pouvant leur permettre de mieux exercer leurs travaux.</p>
            </div>
        </div>
        <div class=" bg-white p-3">
            <div id="carouselExampleIndicators" class="carousel slide p-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <div class="row">

                            <div class="col-sm-6">
                                <img class="rounded d-block w-100" src="dist/img/bm.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Business administration</h5>
                                    <p>Cette formation offre tous les outils pour débuter en entreprenariat <a
                                            href="blog/1">plus
                                            d'infos</a></p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex">
                                    <h1>PiBas ACADEMIA</h1>
                                </div>
                                <p class="">Contrairement au fonctionnement d’autres académies, le programme qu’utilise
                                    PiBas
                                    ACADEMIA a été
                                    initié
                                    dans la cadre de
                                    la lutte contre le chômage, contre la pauvreté mais aussi dans le cadre de
                                    renforcement
                                    de
                                    capacité des
                                    jeunes à pouvoir
                                    affronter les situations difficiles de la vie financière ainsi que professionnelle.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex p-5  ">
                                    <h1>PiBas ACADEMIA</h1>
                                </div>
                                <p class="">Contrairement au fonctionnement d’autres académies, le programme qu’utilise
                                    PiBas
                                    ACADEMIA a été
                                    initié
                                    dans la cadre de
                                    la lutte contre le chômage, contre la pauvreté mais aussi dans le cadre de
                                    renforcement
                                    de
                                    capacité des
                                    jeunes à pouvoir
                                    affronter les situations difficiles de la vie financière ainsi que professionnelle.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <img class="rounded d-block w-100" src="dist/img/en.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Apprendre l'anglais</h5>
                                    <p>L’anglais est la langue la plus influente au monde des affaires <a
                                            href="blog/1">plus
                                            d'infos</a></p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="d-flex p-5 justify-content-center ">
                                    <h1>PiBas ACADEMIA</h1>
                                </div>
                                <p class="">Contrairement au fonctionnement d’autres académies, le programme qu’utilise
                                    PiBas
                                    ACADEMIA a été
                                    initié
                                    dans la cadre de
                                    la lutte contre le chômage, contre la pauvreté mais aussi dans le cadre de
                                    renforcement
                                    de
                                    capacité des
                                    jeunes à pouvoir
                                    affronter les situations difficiles de la vie financière ainsi que professionnelle.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <img class="rounded d-block w-100" src="dist/img/in.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5 class="text-white">Apprentissage en informatique</h5>
                                    <p>Avant de se lancer sur le marché du travail, il est d’une grande obligation de
                                        savoir
                                        manipuler l’ordinateur
                                        convenablement <a href="blog/1">plus
                                            d'infos</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="mt-5">
                <h3 class="hk-sec-title mt-3">blogs</h3>
                <div class="row mt-3">
                    <div class="col-sm">
                        <div id="owl_demo_4" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="card">
                                    <img class="card-img-top" src="dist/img/slide1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk
                                            of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img class="card-img-top" src="dist/img/slide2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk
                                            of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img class="card-img-top" src="dist/img/slide3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk
                                            of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card">
                                    <img class="card-img-top" src="dist/img/slide4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up
                                            the bulk
                                            of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" mt-4 text-center p-5">
                <h3 class="text-primary ">Pourquoi PiBas ACADEMIA ?</h3><br>
                <p class="mb-40">Contrairement au fonctionnement d’autres académies, le programme qu’utilise PiBas
                    ACADEMIA a été initié dans la cadre de
                    la lutte contre le chômage, contre la pauvreté mais aussi dans le cadre de renforcement de capacité
                    des jeunes à pouvoir
                    affronter les situations difficiles de la vie financière ainsi que professionnelle.<br>
                    Ayant constaté que le taux de chômage a atteint un niveau considérablement plus élevé en République
                    Démocratique du
                    Congo, il y a urgence. Il est donc important de lutter contre le chômage en dotant à la population,
                    non seulement d’une
                    connaissance aux programmes de base dont le monde professionnel a besoin (tels que l’anglais,
                    l’informatique et
                    l’entrepreneuriat), mais aussi et surtout de doter à cette population formée d’une occupation dont
                    elle peut vivre parce
                    qu’elle rémunère, ainsi que d’une possibilité d’avoir un prêt d’argent remboursable pouvant leur
                    permettre de marier
                    leurs connaissances à la pratique.</p>
                <img src="dist/img/remp.jpg" class="img-fluid" alt="Responsive image">
            </div>
            {{-- include contact informations --}}
            @include('cont')
        </div>

    </div>
    <div class="col-1"></div>
</div>

<!-- contents -->
@endsection
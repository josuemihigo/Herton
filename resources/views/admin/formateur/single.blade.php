<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('head')
{{-- fin entete de page  --}}


<head>


<body>
    <!-- Preloader
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
        {{-- menu horizontal  --}}
        @include('menu')
        {{-- fin menu horizontal --}}
        {{-- menu verital  --}}
        @include('menulateral')
         {{-- fin menu verital  --}}

         <!-- Setting Panel -->
         <!-- Main Content -->
         <div class="hk-pg-wrapper">
             <!-- Breadcrumb -->
             <nav class="hk-breadcrumb" aria-label="breadcrumb">
                 <ol class="breadcrumb breadcrumb-light bg-transparent">
                     <li class="breadcrumb-item"><a href="#">Forms</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                 </ol>
             </nav>
             <!-- /Breadcrumb -->

             <!-- Container -->
             <div class="container">
                 <!-- Title -->
                 <div class="hk-pg-header">
                     <h4 class="hk-pg-title"><span class="pg-title-icon">
                         <span class="feather-icon">
                            <i data-feather="external-link"></i>
                        </span>
                    </span>{{ $formateurs->adresse }}</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                        <h5 class="hk-sec-title">Tooltips</h5>
                        {{-- <p class="mb-40">Swap the <code>.{valid|invalid}-feedback</code> classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback in a styled tooltip.</p> --}}
                        <div class="row">
                            <div class="col-sm">
                                <div class="card card-profile-feed">
                                    <div class="card-header card-header-action">
                                        <div class="d-flex align-items-center card-action-wrap">
                                            <div class="inline-block dropdown">
                                                {{-- retour a la liste de formateurs --}}
                                                <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="./admin/formateurs/elie'}}" aria-expanded="false" role="button">
                                                    <i class="ion ion-md-arrow-round-back"></i>Retour à la liste</a>

                                            </div>
                                        </div>
                                    </div>
                                    {{-- liste des formateurss  --}}
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span><i class="fa fa-bank font-18 text-light-20 mr-10"></i><span>Nous sommes à (au) :</span></span><span class="ml-5 text-dark">{{ $formateurs->adresse }}</span></li>
                                        <li class="list-group-item"><span><i class="glyphicon glyphicon-envelope font-18 text-light-20 mr-10"></i><span>E-mail:</span></span><span class="ml-5 text-dark">{{ $formateurs->mail }}</span></li>
                                        <li class="list-group-item"><span><i class="ion ion-md-home font-18 text-light-20 mr-10"></i><span>Lives in:</span></span><span class="ml-5 text-dark">{{ $formateurs->telephone }}</span></li>
                                        <li class="list-group-item"><span><i class="ion ion-md-pin font-18 text-light-20 mr-10"></i><span>Créé à la date du:</span></span><span class="ml-5 text-dark">{{ $formateurs->created_at }}</span></li>
                                        <li class="list-group-item"><span><i class="ion ion-md-pin font-18 text-light-20 mr-10"></i><span>Modifié à la date du:</span></span><span class="ml-5 text-dark">{{ $formateurs->updated_at }}</span></li>
                                    </ul>
                                 </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>


        @include('footer')




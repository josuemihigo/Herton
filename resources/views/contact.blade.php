<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('headclient')
{{-- fin entete de page  --}}


<head>
     <body>
        @include('menuinclude')

            <!-- HK Wrapper -->
            <div class="hk-wrapper">

                <!-- Main Content -->
                <div class="hk-pg-wrapper hk-auth-wrapper">
                    <header class="d-flex justify-content-between align-items-center">
                        <a class="d-flex text-blue text-center auth-brand" href="#">
                            Pibasacademia
                        </a>
                        <div class="btn-group btn-group-sm">
                            <a href="#" class="btn btn-outline-secondary">Help</a>
                            <a href="#" class="btn btn-outline-secondary">About Us</a>
                        </div>
                    </header>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-5 pa-0">
                                <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                                    {{--
                                        ajouter une image de mlm system ou bien de Pbas
                                        --}}
                                    <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{ asset('outils/frontOffice')}});">
                                        <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                            <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                                <h1 class="display-3 text-blue mb-20">Understand and look deep into nature.</h1>
                                                <p class="text-blue">The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesnt distract from the layout. Again during the 90s as desktop publishers bundled the text with their software.</p>
                                            </div>
                                        </div>
                                        <div class="bg-overlay bg-trans-dark-50"></div>
                                    </div>
                                    <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{ asset('outils/frontOffice/dist/img/gallery/mock11.jpg')}});">
                                        <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                            <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                                <h1 class="display-3 text-blue mb-20">Experience matters for good applications.</h1>
                                                <p class="text-blue">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                            </div>
                                        </div>
                                        <div class="bg-overlay bg-trans-dark-50"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 pa-0">
                                <div class="auth-form-wrap py-xl-0 py-50">
                                    <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-4 mb-10">MLM SYSTEM</h1>
                                            <a href="{{ url('/faq') }}"> <p class="mb-30">Connectez-vous ici !!!!!</p></a>

                                        <form>


                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Main Content -->

            </div>

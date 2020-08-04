@extends('layout')

@section('content')

<!-- contents -->
<div class="container bg-white mt-3 p-5">

    <div class="row">
        <div class="col-8">
            <div class="card-body">
                <div class="card">
                    <div class="position-relative">
                        <img class="card-img-top d-block" src="dist/img/ga.jpg" alt="Card image cap">
                        <a href="#" class="btn m-3 btn-dark btn-wth-icon icon-wthot-bg btn-rounded btn-pg-link"><span
                                class="icon-label "><i class="ion ion-md-link"></i></span><span
                                class="btn-text">Article</span></a>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Bacon chicken turducken spare ribs.</h2>
                        <p class="card-text">Of course, we'd be remiss not to include the veritable cadre of lorem ipsum
                            knock offs
                            featuring: Bacon Ipsum, Hipster Ipsum, Corporate Ipsum, Legal Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="dist/img/cas1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">The Tony Elumelu Foundation Opens Applications for 5th Cyclee</h5>
                            <a class="card-text" href="#"><small class="text-muted">+ Plus</small></a>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="dist/img/cas2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sommet de l'Union africaine : à Niamey, le Nigeria et le Bénin</h5>
                            <a class="card-text" href="#"><small class="text-muted">+ Plus</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card card-profile-feed">
                <div class="card-header card-header-action">
                    <h6>Dernier actualités</h6>
                    <div class="d-flex align-items-center card-action-wrap">
                        <div class="inline-block dropdown">
                            <a class="dropdown-toggle no-caret" data-toggle="dropdown" href="#" aria-expanded="false"
                                role="button"><i class="ion ion-ios-more"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border-0">
                        <div class="media align-items-center">
                            <div class="d-flex media-img-wrap mr-15">
                                <div class="avatar avatar-sm">
                                    <img src="dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <span class="d-block text-dark text-capitalize">Evie Ono</span>
                                <span class="d-block font-13">Apple Inc</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="media align-items-center">
                            <div class="d-flex media-img-wrap mr-15">
                                <div class="avatar avatar-sm">
                                    <img src="dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <span class="d-block text-dark text-capitalize">Clay Masse</span>
                                <span class="d-block font-13">Hencework.com</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="media align-items-center">
                            <div class="d-flex media-img-wrap mr-15">
                                <div class="avatar avatar-sm">
                                    <img src="dist/img/avatar3.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <span class="d-block text-dark text-capitalize">Madelyn Rascon</span>
                                <span class="d-block font-13">Godaddy.co.in</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="media align-items-center">
                            <div class="d-flex media-img-wrap mr-15">
                                <div class="avatar avatar-sm">
                                    <img src="dist/img/avatar4.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <span class="d-block text-dark text-capitalize">Mitsoku Heid</span>
                                <span class="d-block font-13">Flipkart</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="media align-items-center">
                            <div class="d-flex media-img-wrap mr-15">
                                <div class="avatar avatar-sm">
                                    <img src="dist/img/avatar5.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <span class="d-block text-dark text-capitalize">Eziquiel Merideth</span>
                                <span class="d-block font-13">Paypal</span>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item border-0">
                        <div class="media align-items-center">
                            <div class="d-flex media-img-wrap mr-15">
                                <div class="avatar avatar-sm">
                                    <img src="dist/img/avatar6.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="media-body">
                                <span class="d-block text-dark text-capitalize">Johnie Metoyer</span>
                                <span class="d-block font-13">Robocon</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- Gallerie --}}
    <!-- Row -->
    <div class="row mt-3">

        <div class="col-xl-12">
            <section class="hk-sec-wrapper hk-gallery-wrap" id="gallerie">
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i
                                    data-feather="layers"></i></span></span>Gallerie</h4>
                </div>
                <ul class="nav nav-light nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Library</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Video</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Album</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel">
                        <h6 class="mt-30 mb-20">22 October</h6>
                        <div class="row hk-gallery">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock1.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock1.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10"
                                data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU"
                                data-poster="dist/img/gallery/mock2.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock2.jpg');">
                                    </div>
                                    <i class="ion ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock3.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock3.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="http://vimeo.com/1084537"
                                data-poster="dist/img/gallery/mock4.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock4.jpg');">
                                    </div>
                                    <i class="ion ion-ios-play"></i>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock5.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock5.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock6.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock6.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock7.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock7.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock8.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock8.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock9.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock9.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock10.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock10.jpg');">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <h6 class="mt-30 mb-20">Yesterday</h6>
                        <div class="row hk-gallery">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock11.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock11.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10"
                                data-src="http://www.youtube.com/watch?v=Pq9yPrLWMyU"
                                data-poster="dist/img/gallery/mock2.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock12.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock13.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock13.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="http://vimeo.com/1084537"
                                data-poster="dist/img/gallery/mock4.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock14.jpg');">
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-2 col-md-4 col-sm-4 col-6 mb-10" data-src="dist/img/gallery/mock15.jpg">
                                <a href="#" class="">
                                    <div class="gallery-img"
                                        style="background-image:url('dist/img/gallery/mock15.jpg');">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
    {{-- include contact informations --}}
    @include('cont')
</div>

<!-- contents -->
@endsection
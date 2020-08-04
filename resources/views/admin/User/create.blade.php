<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('head')
{{-- fin entete de page  --}}


<head>


<style>
  .push-top {
    margin-top: 50px;
  }
</style>
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
            <!-- Container -->
             <div class="container">
                 <!-- Title -->
                 <div class="hk-pg-header">
                     <h4 class="hk-pg-title"><span class="pg-title-icon">
                         <span class="feather-icon"><i data-feather="external-link">
                             </i></span></span>Apropos du pied de page</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
                                <a href="{{ url('/aproposs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/aproposs') }}" class="btn btn-gradient-info">Liste</a>
                            </p>
                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                    </div><br />
                                @endif

                                @if(session()->get('success'))
                                    <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                    </div><br />
                                @endif

                                    <div class="card-body">
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div><br />
                                        @endif
                                    </div>
                                        <form method="post" action="/aproposs">
                                             <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="First name" value="" type="text">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="Last name" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" type="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirm Password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                        <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Register</button>
                                        </form>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')

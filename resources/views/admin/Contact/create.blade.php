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
                             </i></span></span>ontact de pied de page</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                    <section class="hk-sec-wrapper">
                            <p class="text-center hk-title">
                                    PiBas Marketing <br>
                                <a href="{{ url('/contacts/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/contacts') }}" class="btn btn-gradient-info">Liste</a>
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
                                        <form method="post" action="{{ url('/contacts') }}">
                                            <div class="form-group">
                                                @csrf
                                                <label for="name">Adresse</label>
                                                <input type="text" class="form-control" name="adresse"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="telephone">Telephone</label>
                                                <input type="tel" class="form-control" name="telephone" id="telephone"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="web">Site web</label>
                                                <input type="text" class="form-control" name="web" id="web" />
                                            </div>
                                            <button type="submit" class="btn btn-block btn-danger">Create User</button>
                                        </form>

                            </section>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')

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
                         <span class="feather-icon"><i data-feather="external-link">
                             </i></span></span>Form Validation</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                        <div class="col-xl-12">
                            <section class="hk-sec-wrapper">
                                <h5 class="hk-sec-title">Tooltips</h5>

                                <div class="push-top">
                                    <a href="{{ url('/formations/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                    <a href="{{ url('/formations') }}" class="btn btn-gradient-info">Liste</a>
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
                                <form method="post" action="/formations/{{ $formation->id}}">
                                    <div class="form-group">
                                        @csrf
                                        @method('PATCH')
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $formation->name }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" value="{{ $formation->email }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" name="phone" value="{{ $formation->phone }}"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="text" class="form-control" name="password" value="{{ $formation->password }}"/>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-danger">Modifier</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        @include('footer')

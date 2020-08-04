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
                                    <a href="{{ url('/faqs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                    <a href="{{ url('/faqs') }}" class="btn btn-gradient-info">Liste</a>

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
                                        <form method="post" action="{{ url('/faqs') }}">
                                            <div class="form-group">
                                                @csrf
                                                <label for="name">Questions</label>
                                                <input type="text" class="form-control" name="question"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Reponse</label>
                                                <input type="text" class="form-control" name="reponse"/>
                                            </div>
                                            <div class="form-group">
                                                <label for="my-select">Categorie de faq</label>
                                                <select id="my-select" class="form-control" name="categorie" >
                                                    <option> Choisir Cateorie</option>
                                                        @foreach ($categories as $key)
                                                            <option value="{{ $key->descfaq_id }}">{{ $key->description }}</option>
                                                        @endforeach
                                                </select>

                                               </div>
                                            <button type="submit" class="btn btn-block btn-info">Ajouter</button>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            @include('footer')

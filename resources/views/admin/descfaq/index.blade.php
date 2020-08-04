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

                            <div class="">
                                <p class="text-center add-event-wrap">
                                    PiBas Marketing <br>
                                <a href="{{ url('/descfaqs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/descfaqs') }}" class="btn btn-gradient-info">Liste</a>
                            </p>

                            </div><br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                                            <thead>
                                                <tr class="table-blue">
                                                    <td>N°</td>
                                                    <td>Password</td>
                                                    <td class="text-center">Action</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    {{ $i=1 }}
                                                    @foreach($descfaqs as $descfaqs)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{$descfaqs->description}}</td>
                                                        <td class="text-center">
                                                            <a href="descfaqs/{{ $descfaqs->descfaq_id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                                            <form action="descfaqs/{{ $descfaqs->descfaq_id }}"  style="display: inline-block">
                                                                @csrf
                                                                @method('put')
                                                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr class="table-warning">
                                                        <td>N°</td>
                                                        <td>Name</td>
                                                        <td class="text-center">Action</td>
                                                    </tr>
                                                </tfoot>
                                            </table>

                                        </section>
                                    </div>
                                </div>
                            </div>
                                @include('footer')

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
                                <a href="{{ url('/blogs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/blogs') }}" class="btn btn-gradient-info">Liste</a>
                            </p>

                            </div><br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                                            <thead>
                                                <tr class="table-warning">
                                                <td>ID</td>
                                                <td>Name</td>
                                                <td>Email</td>
                                                <td>Phone</td>
                                                <td>Password</td>
                                                <td class="text-center">Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {{ $i=1 }}
                                                @foreach($blogs as $blogs)
                                                <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{$blogs->resume}}</td>
                                                    <td>{{$blogs->ublog_idtilisateur}}</td>
                                                    <td>
                                                        @if ($blogs->fichier)
                                                        <div class="embed-responsive embed-responsive-16by9">
                                                                <iframe class="embed-responsive-item" src="{{ asset('blogsfiles/'.$blogs->fichier) }}"></iframe>
                                                    @else

                                                    @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="/blogs/{{ $blogs->blog_id }} /edit" class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="/blogs/destroy/{{ $blogs->blog_id }}" method="post" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                        </form>


                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="table-warning">
                                                    <td>ID</td>
                                                    <td>Name</td>
                                                    <td>Email</td>
                                                    <td>Phone</td>
                                                    <td>Password</td>
                                                    <td class="text-center">Action</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
            </div>
    @include('footer')

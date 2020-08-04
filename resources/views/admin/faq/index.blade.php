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
                             </i></span></span>FAQ de la page</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                    <section class="hk-sec-wrapper">

                            <div class="">
                                <p class="text-center add-event-wrap">
                                    PiBas Marketing <br>
                                <a href="{{ url('/faqs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/faqs') }}" class="btn btn-gradient-info">Liste</a>
                            </p>

                            </div><br>
                            <div class="row">
                                <div class="col-sm">
                            <div class="table-wrap">
                    <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                {{--  <table id="datable_1" class="table table-striped  w-100 display pb-30">  --}}
                    <thead>
                        <tr class="table-warning">
                        <td>N°</td>
                        <td>Caegorier</td>
                        <td/>Question</td>
                        <td>Reponse</td>
                        <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    <tbody>{{ $i=1 }}
                        @foreach($faqs as $faqs)

                        <tr>
                            <td>{{$i++}}</td>
                            @foreach ($categories as $item)
                                @if ($faqs->categories==$item->desc_id)
                                <td>{{$item->description}}</td>
                                @endif
                            @endforeach
/                            <td>{{$faqs->question}}</td>
                            <td>{{$faqs->reponse}}</td>

                            <td class="text-center">
                                <a href="faqs/{{ $faqs->faq_id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <form action="faqs/{{ $faqs->faq_id }}"  style="display: inline-block">
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
                            <td>Caegorier</td>
                            <td/>Question</td>
                            <td>Reponse</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </tfoot>
                </table>

            </section>
        </div>
    </div>
</div>
    @include('footer')

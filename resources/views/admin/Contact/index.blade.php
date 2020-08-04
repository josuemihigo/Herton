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
                                <a href="{{ url('/contacts/create') }}" class="btn btn-gradient-info">Ajouter</a>
                                <a href="{{ url('/contacts') }}" class="btn btn-gradient-info">Liste</a>
                            </p>

                            </div><br>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                                            <thead>
                                                <tr class="table-grey">
                                                <td>N°</td>
                                                <td>Qdresse</td>
                                                <td>Email</td>
                                                <td>Telehone</td>
                                                <td>site web</td>
                                                <td class="text-center">Action</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($contacts as $contacts)
                                                <tr class="tabl-info">
                                                    <td>{{$contacts->contact_id}}</td>
                                                    <td>{{$contacts->adresse}}</td>
                                                    <td>{{$contacts->email}}</td>
                                                    <td>{{$contacts->telephone}}</td>
                                                    <td>{{$contacts->web}}</td>
                                                    <td class="text-center">
                                                        <a href="{{ route('contacts.edit', $contacts->contact_id)}}" class="btn btn-primary btn-sm">Edit</a>
                                                        <form action="{{ route('contacts.destroy',  $contacts->contact_id )}}" method="post" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                        </form>


                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr class="table-blue">
                                                <td>N°</td>
                                                <td>Qdresse</td>
                                                <td>Email</td>
                                                <td>Telehone</td>
                                                <td>site web</td>
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

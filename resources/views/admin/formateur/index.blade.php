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
                    <a href="{{ url('/formateurs/create') }}" class="btn btn-gradient-info">Ajouter</a>
                    <a href="{{ url('/formateurs') }}" class="btn btn-gradient-info">Liste</a>
                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}
                    </div><br />
                @endif
                <h5 class="hk-sec-title">Editable Data Table</h5>
                    <p class="mb-40">Useyyyy <code>row( ).remove( )</code> method to delete a row from a table, and the <code>draw( ) method with false</code> as its first parameter.</p>
                    <div class="row">
                        <div class="col-sm">
                            <div class="table-wrap">
                    <table id="datable_3" class="table table-hover w-100 display dataTable no-footer dtr-inline" role="grid" style="width: 1040px;">
                {{--  <table id="datable_1" class="table table-striped  w-100 display pb-30">  --}}
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
                        @foreach($formateurs as $formateurs)
                        <tr>
                            <td>{{$formateurs->id}}</td>
                            <td>{{$formateurs->name}}</td>
                            <td>{{$formateurs->email}}</td>
                            <td>{{$formateurs->phone}}</td>
                            <td>{{$formateurs->password}}</td>
                            <td class="text-center">
                                <a href="formateurs/{{ $formateurs->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                                <form action="formateurs/{{ $formateurs->id }}"  style="display: inline-block">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Launch demo modal
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body bg-yellow">{{$formateurs->name}}
                                                <p>Woohoo, youre reading this text in a modal!</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

            </section>
        </div>
    </div>
</div>
    @include('footer')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('head');
{{-- fin entete de page  --}}


<head>


<body>
    <!-- Preloader
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    --><!-- /Preloader -->

	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-vertical-nav">
        {{-- menu horizontal  --}}
        @include('menu');
        {{-- fin menu horizontal --}}
        {{-- menu verital  --}}
        @include('menulateral');
         {{-- fin menu verital  --}}

         <!-- Main Content -->
         <div class="hk-pg-wrapper">
             <!-- Breadcrumb -->
             <nav class="hk-breadcrumb" aria-label="breadcrumb">
                 <ol class="breadcrumb breadcrumb-light bg-transparent">
                     <li class="breadcrumb-item"><a href="#">Tables</a></li>
                     <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                 </ol>
             </nav>
             <!-- /Breadcrumb -->

             <!-- Container -->
             <div class="container">

                 <!-- Title -->
                 <div class="hk-pg-header">
                     <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Data Tables</h4>
                 </div>
                 <!-- /Title -->

                 <!-- Row -->
                 <div class="row">
                     <div class="col-xl-12">
                         <section class="hk-sec-wrapper">
                             <h5 class="hk-sec-title">Data Table</h5>
                             <p class="mb-40">Add advanced interaction controls to HTML tables like <code>search, pagination & selectors</code>. For responsive table just add the <code>responsive: true</code> to your DataTables function. <a href="https://datatables.net/reference/option/" target="_blank">View all options</a>.</p>
                             <div class="row">
                                 <div class="col-sm">
                                     <div class="table-wrap">
                                         <table id="datable_1" class="table table-hover w-100 display pb-30">
                                             <thead>
                                                 <tr>
                                                     <th>N°</th>
                                                     <th>Adresse</th>
                                                     <th>Email</th>
                                                     <th>Telephone</th>
                                                     <th>action</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                {{ $i=1 }}
                                               @foreach ($contact as $contac)
                                                 <tr>
                                                    <td>{{ $i++ }}</td>
                                                    <td>{{ $contac->adresse }}</td>
                                                     <td>{{ $contac->mail }}</td>
                                                     <td>{{ $contac->telephone }}</td>
                                                     <td>
                                                        <a href="/contact/{{ $contac->id }}/edit" class="mr-25" data-toggle="tooltip" data-original-title="Modifier">
                                                            <i class="icon-pencil"></i> </a>
                                                        <a href="/contact/{{ $contac->id }}" class="mr-25" data-toggle="tooltip"
                                                            data-original-title="voir"> <i class="icon-eye"></i> </a>
                                                        <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="icon-trash txt-danger"></i> </a>
                                                    </td>

                                                </tr>
                                                    @endforeach
                                             </tbody>
                                             <tfoot>
                                                 <tr>
                                                     <th>N°</th>
                                                     <th>Adresse</th>
                                                     <th>Mail</th>
                                                     <th>Telephone</th>
                                                     <th>Action</th>
                                                 </tr>
                                             </tfoot>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </section>
                </div>
            </div>
        </div>
    </div>

        @include('footer')



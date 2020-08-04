<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  {{-- entete de page  --}}
  @include('head')
{{-- fin entete de page  --}}

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
                            <div class="row">
                                <div class="col-sm">
                                    @foreach ($aproposs as $aproposs)
                                    <form method="post" action="{{ route('aproposs.update',  $aproposs->apropos_id) }}">
                                        <div class="form-group">
                                            @csrf
                                            @method('PUT')

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <div class="col-sm">
                                                <div class="tinymce-wrap">
                                                 <textarea class="tinymce" name="password" value="{{ $aproposs->password }}">
                                                    {{$aproposs->password}}
                                                 </textarea>
                                            </div>
                                        </div>
                                        <button type="submit" class="form-control btn btn-block btn-info">Modifier</button>
                                    </form>
                                    @endforeach

                                    </div>
                                </div>
                        </section>
                    </div>
                </div>
    @include('footer')

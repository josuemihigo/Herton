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
          @yield('content')
          @include('footerinclude')
         </div>
    </div>
</body>


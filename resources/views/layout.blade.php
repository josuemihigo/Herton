<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  {{-- entete de page  --}}
  @include('head')
  {{-- fin entete de page  --}}
</head>

<body>
  @include('menuinclude')
  <!-- Main Content -->
  <div class="hk-pg-wrapper">
    <div class="container-fluid">
      <!-- Row -->
      <div class="row">
        <div class="col-xl-12">
          @yield('content')
        </div>
      </div>
      <!-- /Row -->
      @include('footerinclude')
    </div>
  </div>
  <!-- /Container -->
</body>

</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PiBas MLM SYSTEM</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <!--bootstrap -->
    <link   href="{{  asset('outils\frontOffice\css\bootstrap.min.css') }}">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('outils/frontOffice/favicon.ico') }}">
    <link rel="icon" href="{{ asset('outils/frontOffice/favicon.ico') }}" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css') }}" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css') }}" rel="stylesheet" type="text/css">

    <!-- ION CSS -->
    <link href="vendors/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css">
    <link href="vendors/ion-rangeslider/css/ion.rangeSlider.skinHTML5.css') }}" rel="stylesheet" type="text/css">

    <!-- select2 CSS -->
    <link href="vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Pickr CSS -->
    <link href="vendors/pickr-widget/dist/pickr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Daterangepicker CSS -->
    <link href="vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
    <link href="{{ asset('outils/frontOffice/dist/css/style.css') }}" rel="stylesheet" type="text/css">
	<!-- Lightgallery CSS -->
    <link href="{{ asset('outils/frontOffice/dist/css/lightgallery.css') }}" rel="stylesheet" type="text/css">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <main class="py-4">
        @yield('content')
    </main>

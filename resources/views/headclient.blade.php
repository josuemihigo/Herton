<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>PiBas MLM SYSTEM</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="{{ asset('outils/frontOffice/vendors/jquery-toggles/css/toggles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('outils/frontOffice/vendors/jquery-toggles/css/themes/toggles-light.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="{{ asset('outils/frontOffice/dist/css/style.css')}}" rel="stylesheet" type="text/css">
    <!-- Toggles CSS -->

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="60">
    <main class="py-4">
        @yield('content')
    </main>

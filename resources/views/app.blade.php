<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Wevo Call Center">
    <meta name="author" content="Lam KY">
    <meta name="keyword"
          content="Wevo, Call, Center">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
    <title>Wevo Call Center</title>

    <!-- Icons -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.css') }}" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Styles required by this views -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    @yield('mycss')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
@include('app.navbar')

<div class="app-body">
    @include('app.sidebar')

    <main class="main">
        @yield('content')
    </main>

    @include('app.asidemenu')

</div>

@include('app.scripts')
@yield('myscript')

</body>
</html>
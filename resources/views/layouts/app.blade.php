<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Custom Site
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                 <div id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @foreach(\App\Models\NavItem::where([['active', '=', 1], ['parent_id', '=', 0]])->get() as $main_nav )
                    <div class="navbar-nav mr-auto">
                            <li class="{{ (\App\Models\NavItem::where('parent_id', '=', $main_nav->id)->get()->count() > 0) ? 'dropdown' : ''}}">
                                <a class="nav-link {{ (\App\Models\NavItem::where('parent_id', '=', $main_nav->id)->get()->count() > 0) ? 'dropdown-toggle' : ''}}" href="/{{ $main_nav->uri }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $main_nav->name}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach(\App\Models\NavItem::where([['active', '=', 1], ['parent_id', '=', $main_nav->id]])->get() as $sub_nav )
                                        <a class="dropdown-item" href="/{{ $sub_nav->uri }}">{{ $sub_nav->name }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @endforeach

                    {{--</ul>--}}
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

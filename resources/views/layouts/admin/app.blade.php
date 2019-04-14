<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link rel="stylesheet" href="{{asset('css/trix.css')}}" />

    <!-- Dropzone -->
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
</head>
<header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>CMS</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>CMS</b>Destroyer</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <i class="fas fa-bars"></i>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('img/me.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-flat">Logout</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    {{--<a href="#" data-toggle="control-sidebar"><i class="fas fa-bars"></i></a>--}}
                </li>
            </ul>
        </div>

    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
{{ Route::is('nav') }}
<!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview menu-open {{ Request::is('nav/create') || Request::is('nav') || Request::is('dashboard') || Request::is('navitem') || Request::is('navitem/edit') ? 'active' : '' }} ">
                <a href="#">
                    <i class="fas fa-compass mr-4"></i> <span>Navigation</span>
                    <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
                </a>
                <!-- sub nav -->
                <ul class="treeview-menu">
                    <li class="{{ Request::is('nav') ? 'active' : '' }}"><a href="{{ route('navitem.index') }}"><i class="fas fa-chevron-right"></i> Main Nav</a></li>
                </ul>
            </li>
            <li class="treeview menu-open">
                <a href="#">
                    <i class="fas fa-paper-plane mr-4"></i><span>Page</span>
                    <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
	            </span>
                </a>
                <!-- sub nav -->
                <ul class="treeview-menu">
                    <li class="{{ Request::is('page') || Request::is('page/create') ? 'active' : '' }}"><a href="{{ route('page.create') }}"><i class="fas fa-chevron-right"></i></i> Create</a></li>
                    <li class="{{ Request::is('page') ? 'active' : '' }}"><a href="{{ route('page.index') }}"><i class="fas fa-chevron-right"></i></i> All Pages</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('gallery') || Request::is('gallery/*') ? 'active' : '' }}">
                <a href="{{ route('gallery.index') }}">
                    <i class="fas fa-hat-wizard mr-4"></i> <span>Gallery</span>
                    <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
                        <!-- sub nav -->
	            </span>
                </a>
            </li>
            <li class="treeview menu-open {{ Request::is('message') || Request::is('message/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-inbox mr-4"></i> <span>Messages</span>
                    <span class="pull-right-container">
	              <i class="fa fa-angle-left pull-right"></i>
                        <!-- sub nav -->
	                <ul class="treeview-menu">
	                    <li class="{{ Request::is('message') || Request::is('message/*') ? 'active' : '' }}"><a href="{{ route('message.index') }}"><i class="fas fa-chevron-right"></i> All Messages</a></li>
	                </ul>
	            </span>
                </a>
            </li>
            <li class="treeview menu-open {{ Request::is('users') || Request::is('users/*') ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-cogs mr-4"></i><span>Settings</span>
                    <span class="pull-right-container">
	                           <i class="fa fa-angle-left pull-right"></i>
                        <!-- sub nav -->
	                        <ul class="treeview-menu">
	                            <li><a href="{{ route('users.index') }}"><i class="fas fa-chevron-right"></i> User</a></li>
	                        </ul>
	                    </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@yield('content')


@yield('footer')
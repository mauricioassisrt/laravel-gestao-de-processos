<!doctype html>
<html lang="{{ config("app.locale") }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config("app.name") }}</title>
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" type="text/css">
    @stack('post-styles')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark bg-primary border-bottom">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fa fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <aside class="main-sidebar sidebar-light-primary elevation-4">
        <a href="{{route('admin.index')}}" class="brand-link text-center">
            <span class="brand-text font-weight-bold"><img src="/images/logo-admin.png"/></span>
        </a>

        <div class="sidebar">
            <div class="user-panel d-flex">
                <div class="info m-auto py-3">
                    <a href="#" class="d-block">Administrador</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}"
                           class="{{'nav-link '.active('admin.index')}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.terms.index') }}"
                           class="{{'nav-link '.active('admin.terms.*')}}">
                            <i class="nav-icon fas fa-pencil-alt"></i>
                            <p>
                                Termos de Uso
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.clients.index') }}"
                           class="{{'nav-link '.active('admin.clients.*')}}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Clientes
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.employees.index') }}"
                           class="{{'nav-link '.active('admin.employees.*')}}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Funcionários
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.notifications.index') }}"
                           class="{{'nav-link '.active('admin.notifications.*')}}">
                            <i class="nav-icon fas fa-bell"></i>
                            <p>
                                Notificações
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}"
                           class="{{'nav-link '.active('admin.users.*')}}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Usuários
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.devices.index') }}"
                           class="{{'nav-link '.active('admin.devices.*')}}">
                            <i class="nav-icon fas fa-mobile-alt"></i>
                            <p>
                                Dispositivos
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.oauth_clients.index') }}"
                           class="{{'nav-link '.active('admin.oauth_clients.*')}}">
                            <i class="nav-icon fas fa-mobile-alt"></i>
                            <p>
                                Api Clients
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div id="app">
                @include('flash::message')
                @include('admin._partials.form-errors')
                @yield('content')
            </div>
        </div>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
        <div class="p-3">
            <div class="user-panel d-flex">
                <div class="info m-auto py-3">
                    <a href="{{route('admin.profile.edit')}}" class="d-block">{{ Auth::user()->name }}</a>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('home') }}" class="btn btn-default btn-block text-primary">
                    Voltar para o site
                </a>
                <a href="{{ url('/logout') }}" class="btn btn-default btn-block text-primary"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </aside>

    <div class="clearfix"></div>
    <footer class="main-footer text-center mt-5">
        © 2019 Vértice Digital. Todos os direitos reservados.
    </footer>
</div>
<script type="text/javascript" src="{{ mix('/js/manifest.js') }}"></script>
<script type="text/javascript" src="{{ mix('/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ mix('/js/admin.js') }}"></script>
@stack('post-scripts')
</body>
</html>

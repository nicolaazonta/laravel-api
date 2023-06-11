<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'
        integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body class="bg-black text-light">
    <div id="app">

        <ul class="nav justify-content-end flex-sm-column sticky-top nav-dark sticky-top  shadow">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.projects.index') }}" aria-current="page"><i class="fa fa-home"
                        aria-hidden="true"></i></a>
            </li>
        </ul>


        <div class="container-fluid vh-100">
            <div class="row h-100 ">

                {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block collapse p-0">
                    <div class="card bg-dark text-white p-3 m-3 rounded-3">

                        <div class="position-sticky pt-3">

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-dark' : '' }}"
                                        aria-current="page" href="{{ route('admin.dashboard') }}">
                                        <i class="fa-solid fa-gauge"></i>
                                        {{ __('Dashboard') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-dark' : '' }}"
                                        href="{{ route('admin.projects.index') }}">
                                        <i class="fa-solid fa-thumbtack"></i>
                                        {{ __('Projects') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <i class="fa-solid fa-bookmark"></i>
                                        Categories
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <i class="fa-solid fa-tags"></i>
                                        Tags
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card text-bg-warning m-3 rounded-3">
                        <ul class="list-group list-group-flush">

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="add a new type"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="button"
                                    id="button-addon2">Button</button>
                            </div>
                            
                            <li class="list-group-item bg-transparent">An item</li>
                            <li class="list-group-item bg-transparent">An item</li>
                            <li class="list-group-item bg-transparent">An item</li>
                            <li class="list-group-item bg-transparent">An item</li>


                        </ul>
                    </div>

                </nav> --}}

                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block collapse p-0">

                    <div class="card bg-dark text-white p-3 m-3 rounded-3">
                        <div class="position-sticky pt-3">

                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'admin.dashboard' ? 'bg-dark' : '' }}"
                                        aria-current="page" href="{{ route('admin.dashboard') }}">
                                        <i class="fa-solid fa-gauge"></i>
                                        {{ __('Dashboard') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::currentRouteName() == 'admin.projects.index' ? 'bg-dark' : '' }}"
                                        href="{{ route('admin.projects.index') }}">
                                        <i class="fa-solid fa-thumbtack"></i>
                                        {{ __('Projects') }}
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <i class="fa-solid fa-bookmark"></i>
                                        Categories
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="#">
                                        <i class="fa-solid fa-tags"></i>
                                        Tags
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    @yield('sidebar')
                    

                </nav>


                <main class="col-md-9 ml-sm-auto col-lg-10 p-0">
                    @yield('content')
                </main>
            </div>
        </div>

    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300&family=Roboto+Mono&family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body class="bg-white">

    <div class="container-fluid">
        <div class="row">
            <div class="col-auto">
                <div class="d-flex flex-column flex-shrink-0 bg-white sideBar" style="width: 4.5rem;margin-left: -10px; height: 100vh;">
                    <a href="/home" class="d-block p-3 link-body-emphasis text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
                        VB
                    </a>
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                        <li class="nav-item">
                            <a href="/home" class="nav-link active py-3 border-bottom rounded-0" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                                H
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link py-3 border-bottom rounded-0" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                                T
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col bg-body-tertiary">
                <div class="d-flex justify-content-between px-3 mt-3 mb-3">
                    <div class="">
                        <h5 class="fw-bold">WELCOME TO VISIONBANK</h5>
                        <span class="text-secondary">HI, NURDINE ABOO BACAR</span>
                    </div>
                    <div>
                        <div class="dropdown align-self-center">
                            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle me-2">
                                <strong>NURDINE ABOO BACAR</strong>
                            </a>
                            <ul class="dropdown-menu text-small shadow">
                                <li><a class="dropdown-item" href="/profile">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
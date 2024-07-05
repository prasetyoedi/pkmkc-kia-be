<div class="atas">
    <nav class="navbar navbar-light border-bottom-0" style="background-color: pink;">
        <button class="navbar-toggler d-block d-md-none ms-3" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#sidebar" aria-controls="sidebar">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>

<div class="offcanvas offcanvas-start d-md-block" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel"
    style="background-color: pink;">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarLabel"> <img src="{{ asset('img/logo.png') }}" alt="" srcset=""
                width="150px" height="auto" style="margin-left: 10px;"></h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
        </button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    About Us
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Contact Us
                </a>
            </li>
        </ul>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-none d-md-block sidebar" style="background-color: pink;">
            <div class="position-sticky vh-100" style="background-color: pink;">
                <div class="pt-3">
                    <img src="{{ asset('img/logo.png') }}" alt="" srcset="" width="150px" height="auto"
                        style="margin-left: 10px;">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active mt-4" href="#">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="col-md-10 ms-sm-auto ol-lg-10 px-md-4">
            @yield('content')
        </main>
    </div>
</div>
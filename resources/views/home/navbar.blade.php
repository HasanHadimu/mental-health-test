    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="py-2">
                        <a href="{{url('login')}}" style="color: #000" class="m-0"><i class="fa fa-login me-2"></i>Masuk</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>DentCare</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Pelajari Tentang Kesehatan Mantal</a>
                <a href="service.html" class="nav-item nav-link">Sumber Daya</a>
                <a href="about.html" class="nav-item nav-link">Tentang Kami</a>
            </div>
            <button type="button" class="btn text-dark" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="{{url('/quiz/create')}}" class="btn btn-warning py-2 px-4 ms-3">Ikuti Test Kesehatan Mental</a>
        </div>
    </nav>

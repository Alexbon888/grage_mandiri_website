<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <link href="assets/img/logo/LOGO GRAGE MANDIRI.png" rel="icon">

        <title>Grage Mandiri - Order</title>

        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        @include('head_link')
    </head>

    <body>
        <!-- Spinner Start -->
        @include('spinner')
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="{{ url('order') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Grage Mandiri</h2>
                <a href="/logout" class="nav-item nav-link">Log Out</a>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('history') }}" class="nav-item nav-link">History</a>
                    <a href="{{ url('') }}" class="nav-item nav-link">Profile</a>
                </div>

                <a href="{{ url('order') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Order<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/carousel-bg-2.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Order</h1>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item">
                                <a href="{{ url('history') }}">History</a>
                            </li>

                            <li class="breadcrumb-item">
                                <a href="{{ url('') }}">Profile</a>
                            </li>

                            <li class="breadcrumb-item text-white active" aria-current="page">Order</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- ORDER FORM -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Form Pemesanan</h1>

                        <form action="{{ route('reservasi.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nama Lengkap" style="height: 55px;" name="nama">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Nomor Telepon" style="height: 55px;" name="no_hp">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Alamat" name="alamat">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;" name="layanan">
                                        <option selected>Jenis Layanan</option>
                                        <option value="Perawatan">Perawatan</option>
                                        <option value="Perbaikan">Perbaikan</option>
                                    </select>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="date" class="form-control border-0" style="height: 55px;" name="tanggal_reservasi">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="plat nomor" name="plat"></textarea>
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Keluhan" name="keluhan"></textarea>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Reservasi Layanan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END ORDER FORM -->

        <!-- Footer Start -->
        @include('footer')
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- Footer Link -->
        @include('footer_link')
        <!-- Footer Link End-->
    </body>

</html>

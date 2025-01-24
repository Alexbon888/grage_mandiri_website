<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <link href="assets/img/logo/LOGO GRAGE MANDIRI.png" rel="icon">

    <title>Grage Mandiri - History</title>

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
            
            <a href="#" class="nav-item nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('history') }}" class="nav-item nav-link active">History</a>
            </div>

            <a href="{{ url('order') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Order<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(assets/img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">History</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                        <li class="breadcrumb-item text-white active" aria-current="page">History</li>

                        <li class="breadcrumb-item">
                            <a href="{{ url('order') }}">Order</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Simple Tables -->
    <div class="container">
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Riwayat Pemesanan</h6>
            </div>

            <div class="table-responsive">
                <table class="table align-items-center table-flush text-center">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Jenis Layanan</th>
                            <th>Tanggal Reservasi</th>
                            <th>Plat Nomor</th>
                            <th>Keluhan</th>
                            <th>Status Reservasi</th>
                            <th>Item Terpakai</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($reservasi as $r)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $r->layanan }}</td>
                                <td>{{ $r->tanggal_reservasi }}</td>
                                <td>{{ $r->plat }}</td>
                                <td>{{ $r->keluhan }}</td>
                                <td>{{ $r->status }}</td>
                                <td>{{ $r->item }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="card-footer"></div>
        </div>
    </div>
    <!-- Table End -->

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

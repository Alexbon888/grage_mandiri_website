<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">

        <link href="assets/img/logo/LOGO GRAGE MANDIRI.png" rel="icon">

        <title>Grage Mandiri - Home</title>

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
            <a href="{{ url('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>Grage Mandiri</h2>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="{{ url('home') }}" class="nav-item nav-link active">Beranda</a>
                    <a href="{{ url('about_us') }}" class="nav-item nav-link">Tentang Kami</a>
                    <a href="{{ url('services') }}" class="nav-item nav-link">Layanan</a>
                </div>

                <a href="{{ url('login') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="assets/img/bg-1.png" alt="Image">

                        <div class="carousel-caption d-flex align-items-center">
                            <div class="container">
                                <div class="row align-items-center justify-content-center justify-content-lg-start">
                                    <div class="col-10 col-lg-7 text-center text-lg-start">
                                        <h6 class="text-white text-uppercase mb-3 animated slideInDown">Layanan Kendaraan</h6>

                                        <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Perbaikan, Perawatan Mobil Berkualitas dan Terpercaya</h1>

                                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5 animated slideInDown">Reservasi Sekarang<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 pt-4" style="min-height: 400px;">
                        <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/about2.png" style="object-fit: cover;" alt="">

                            <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                                <h1 class="display-4 text-white mb-0">20 <span class="fs-4">Tahun</span></h1>
                                <h4 class="text-white">Pengalaman</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <h6 class="text-primary text-uppercase">Tentang Kami</h6>

                        <h1 class="mb-4"><span class="text-primary">Grage Mandiri</span> Adalah Tempat Terbaik Untuk Perbaikan Dan Perawatan Mobil Anda</h1>

                        <div class="row g-2 mb-2 pb-2">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex" style="align-items: center;">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">01</span>
                                    </div>

                                    <div class="ps-3" style="flex-grow: 1; display: flex; align-items: center;">
                                        <h5 style="text-align: center;">Mekanik yang berpengalaman dan professional</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2 mb-2 pb-2">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex" style="align-items: center;">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">02</span>
                                    </div>

                                    <div class="ps-3" style="flex-grow: 1; display: flex; align-items: center;">
                                        <h5 style="text-align: center;">Pekerjaan yang berkualitas dan bergaransi</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2 mb-2 pb-2">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex" style="align-items: center;">
                                    <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                        <span class="fw-bold text-secondary">03</span>
                                    </div>

                                    <div class="ps-3" style="flex-grow: 1; display: flex; align-items: center;">
                                        <h5 style="text-align: center;">Menyediakan sparepart berkualitas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Service Start -->
        <div class="container-xxl service py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase">Layanan</h6>
                    <h1 class="mb-5">Jelajahi Layanan Kami</h1>
                </div>

                <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-lg-4">
                        <div class="nav w-100 nav-pills me-4">
                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                                <i class="fa fa-car-side fa-2x me-3"></i>
                                <h4 class="m-0">Perbaikan</h4>
                            </button>

                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                                <i class="fa fa-car fa-2x me-3"></i>
                                <h4 class="m-0">Pemeriksaan Kelistrikan</h4>
                            </button>

                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                                <i class="fa fa-cog fa-2x me-3"></i>
                                <h4 class="m-0">Tune Up Mobil</h4>
                            </button>

                            <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                                <i class="fa fa-oil-can fa-2x me-3"></i>
                                <h4 class="m-0">Ganti Oli</h4>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="tab-content w-100">
                            <div class="tab-pane fade show active" id="tab-pane-1">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/service-1.png"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="mb-3">20 Tahun Pengalaman Layanan Kendaraan</h3>

                                        <p class="mb-4">Kami telah bergerak dalam bidang otomotif selama lebih dari 20 tahun, dan kami dapat menangani semua masalah yang ada pada kendaraan anda. Anda tidak perlu khawatir dengan kualitas di workshop kami, karena kami mengerjakan dengan teliti dan detail dengan apa yang dikerjakan dan bergaransi</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>

                                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5 mt-3">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-pane-2">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/service-2.png"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="mb-3">20 Tahun Pengalaman Layanan Kendaraan</h3>

                                        <p class="mb-4">Kami dapat menangani masalah electrical yang terjadi pada kendaraan anda. Kami dapat menyelesaikan masalah electrical dengan cepat dan memiliki hasil terjamin</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>

                                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5 mt-3">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-pane-3">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/service-3.png"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="mb-3">20 Tahun Pengalaman Layanan Kendaraan</h3>

                                        <p class="mb-4">Dalam perawatan kendaraan, anda dapat mempercayakan perawatan kendaraan anda kepada kami. Kami akan membuat kendaraan anda terasa lebih bertenaga seperti layaknya mobil baru</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>

                                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5 mt-3">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tab-pane-4">
                                <div class="row g-4">
                                    <div class="col-md-6" style="min-height: 350px;">
                                        <div class="position-relative h-100">
                                            <img class="position-absolute img-fluid w-100 h-100" src="assets/img/service-4.png"
                                                style="object-fit: cover;" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <h3 class="mb-3">20 Tahun Pengalaman Layanan Kendaraan</h3>

                                        <p class="mb-4">Di workshop kami, menyediakan berbagai macam oli berkualitas dan terjamin keaslian nya. Anda tidak perlu khawatir dengan produk yang dijual pada workshop kami, dan kami juga akan memberikan rekomendas produk yang terbaik sesuai dengan kendaraan anda.</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Quality Servicing</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Expert Workers</p>

                                        <p><i class="fa fa-check text-success me-3"></i>Modern Equipment</p>

                                        <a href="{{ url('login') }}" class="btn btn-primary py-3 px-5 mt-3">Reservasi<i class="fa fa-arrow-right ms-3"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

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

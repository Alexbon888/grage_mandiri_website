<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="assets/img/logo/LOGO GRAGE MANDIRI.png" rel="icon">

    <title>Grage Mandiri - Login</title>

    <!-- MDBootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <h1 class="display-4">Selamat Datang</h1>
                    <p class="lead">Silakan Login atau Registrasi untuk melanjutkan reservasi</p>
                </div>

                <div class="card">
                    <div class="card-body">
                        <!-- Pills navs -->
                        <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login"
                                    role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                            </li>

                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register"
                                    role="tab" aria-controls="pills-register" aria-selected="false">Registrasi</a>
                            </li>
                        </ul>
                        <!-- Pills navs -->

                        <!-- Pills content -->
                        <div class="tab-content">
                            <!-- SIGN IN -->
                            <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                                aria-labelledby="tab-login">
                                <form method="POST" action="#">
                                    @csrf
                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input name='email' type="email" id="loginName" class="form-control" />
                                        <label class="form-label" for="loginName">Email</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input name='password' type="password" id="loginPassword"
                                            class="form-control" />
                                        <label class="form-label" for="loginPassword">Password</label>
                                    </div>

                                    <!-- Submit button -->
                                    {{-- <button href="{{ url('order') }}" type="submit" class="btn btn-primary btn-block mb-4">Sign in</button> --}}
                                </form>

                                <div class="form-group">
                                    <a href="{{ url('order') }}" class="btn btn-primary btn-block">Login</a>
                                </div>
                            </div>

                            <!-- REGISTER -->
                            <div class="tab-pane fade" id="pills-register" role="tabpanel"
                                aria-labelledby="tab-register">
                                <form method="POST" action="{{ route('register.submit') }}">
                                    @csrf
                                    <!-- Name input -->
                                    <div class="form-outline mb-4">
                                        <input name='name' type="text" id="registerName" class="form-control" />
                                        <label class="form-label" for="registerName">Name</label>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input name='email' type="email" id="registerEmail" class="form-control" />
                                        <label class="form-label" for="registerEmail">Email</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input name='password' type="password" id="registerPassword"
                                            class="form-control" />
                                        <label class="form-label" for="registerPassword">Password</label>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                                        <label class="form-check-label" for="registerCheck">I have read and agree to the
                                            terms</label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                                </form>
                            </div>
                        </div>
                        <!-- Pills content -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- MDBootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
</body>

</html>

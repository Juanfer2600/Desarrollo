<?php
session_start();
include 'assets/header.php'; ?>



<body>
    <div class="auth-page-wrapper pt-5" style="min-height: 100vh; display: flex; align-items: center; justify-content: center;">
        <!-- auth page content -->
        <div class="auth-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-sm-5 mb-4 text-white-50">
                            <div>
                                <a href="index.php" class="d-inline-block auth-logo">
                                    <img src="assets/images/icono gauss.png" alt="" height="100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4 card-bg-fill">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Bienvenidos!</h5>
                                </div>
                                <div class="p-2 mt-4">

                                    <?php
                                    if (isset($_SESSION['sa-error'])) {
                                        echo "
                                        <div class='alert alert-danger alert-border-left alert-dismissible fade show text-center' role='alert'>
                                            <i class='ri-error-warning-line label-icon'></i><strong> Error </strong> - " . $_SESSION['sa-error'] . "
                                        </div>
                                        ";
                                        unset($_SESSION['sa-error']);
                                    }
                                    ?>

                                    <form action="login.php" method="POST">
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" class="form-control pe-5 password-input" id="password" name="password" placeholder="Enter password">
                                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon material-shadow-none" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit" name="login">Iniciar Sesión</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->
    </div>
    <!-- end auth-page-wrapper -->
    <footer>
        <div class="text-center">
            <p>© <script>
                    document.write(new Date().getFullYear())
                </script> Ingenieria en sistemas UMG 2024</p>
        </div>
    </footer>
    <?php include 'assets/scripts.php'; ?>
</body>

</html>
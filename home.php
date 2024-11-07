<?php
include 'assets/conn.php';
include 'assets/header.php';

// Verificamos si el usuario está autenticado
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $sql = "SELECT username FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if ($row) {
        $username = $row['username'];
    }
}
?>
<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php
        // Pasar el user_type a menubar.php para mostrar el menú condicionalmente
        include 'assets/menubar.php';
        ?>

        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col">

                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <!-- Mostrar el nombre del usuario -->
                                                <h1>BIENVENIDO <?php echo htmlspecialchars($username); ?>!</h1>
                                                <br>
                                                <span ></span>
                                            </div>
                                        <a href="https://prueba100-6bcda8ea6008.herokuapp.com/" class="btn btn-primary">Ir al servicio web</a>
                                        </div><!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </div> <!-- end .h-100-->
                        </div> <!-- end col -->
                    </div>
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <?php include 'assets/footer.php'; ?>
    <?php include 'assets/scripts.php'; ?>
</body>

</html>
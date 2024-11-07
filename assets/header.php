<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Aug 2024 07:44:28 GMT -->

<head>

    <style>
        /* Imagen de fondo */
body {
    background-image: url('assets/images/fondoindex.jpg'); /* Cambia esta ruta a la imagen de fondo */
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
}

/* Efecto de opacidad y movimiento al cargar el logo */
@keyframes fadeInLogo {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.auth-logo img {
    animation: fadeInLogo 1.5s ease-in-out;
}


/* Efecto de opacidad y movimiento al cargar */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.card-bg-fill {
    animation: fadeIn 1s ease-in-out;
}

/* Estilo extra para la tarjeta */
.card-bg-fill {
    background: rgba(255, 255, 255, 0.8); /* Fondo blanco semi-transparente */
    border-radius: 10px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
}
</style>

    <meta charset="utf-8" />
    <title>Gauss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jsvectormap css -->
    <link href="./assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="./assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />

    <!-- Sweet Alert css-->
    <link href="./assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="./assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="./assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="./assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="./assets/css/custom.min.css" rel="stylesheet" type="text/css" />

    <!--datatable css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">

    <link href="https://cdn.jsdelivr.net/npm/select2%404.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<?php include 'profile_modal.php'; ?>
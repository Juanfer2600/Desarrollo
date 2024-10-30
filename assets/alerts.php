<?php
                if (isset($_SESSION['sa-message'])) {
                    echo "
    <script>
        Swal.fire({
            icon: '{$_SESSION['sa-type']}',
            title: '{$_SESSION['sa-message']}',
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    ";
                    // Limpiar las variables de sesión para evitar que se muestren en recargas posteriores
                    unset($_SESSION['sa-message']);
                    unset($_SESSION['sa-type']);
                }
                ?>
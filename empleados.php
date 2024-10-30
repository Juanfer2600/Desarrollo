<?php
include 'assets/conn.php';
include 'assets/header.php';
?>

<!-- Begin page -->
<div id="layout-wrapper">
    <?php include 'assets/menubar.php'; ?>

    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Empleados</h2>
                        <div class="card">
                            <div class="card-header d-flex align-items-center">
                                <div>
                                    <a href="#addnew" data-bs-toggle="modal" class="btn btn-primary"><i class="bx bx-plus"></i></a>
                                </div>
                            </div>

                            <div class="card-body">
                                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Fecha de contratación</th>
                                            <th>Nombre del empleado</th>
                                            <th>Asignar Tareas</th>
                                            <th>Asignar Proyectos</th>
                                            <th>Asignar Materiales</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT empleados.id, empleados.fecha, empleados.nombre, 
        tareas.nombre_tarea AS tareas, 
        proyectos.nombre AS proyectos, 
        materiales.nombre AS materiales
        FROM empleados
        LEFT JOIN tareas ON empleados.tareas = tareas.id
        LEFT JOIN proyectos ON empleados.proyectos = proyectos.id
        LEFT JOIN materiales ON empleados.materiales = materiales.id";
                                        $query = $conn->query($sql);
                                        while ($row = $query->fetch_assoc()) {
                                            echo "
        <tr>
            <td>" . $row['id'] . "</td>
            <td>" . ($row['fecha'] ? date_format(date_create($row['fecha']), 'd/m/Y') : '') . "</td>
            <td>" . $row['nombre'] . "</td>
            <td>" . $row['tareas'] . "</td>
            <td>" . $row['proyectos'] . "</td>
            <td>" . $row['materiales'] . "</td>
            <td>
                <button class='btn btn-success waves-effect waves-light edit' data-id='" . $row['id'] . "'><i class='bx bx-edit'></i> </button>
                <button class='btn btn-danger delete' data-id='" . $row['id'] . "'><i class='bx bx-trash'></i> </button>
            </td>
        </tr>
    ";
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'assets/footer.php'; ?>
<?php include 'assets/empleados_modal.php'; ?>
<?php include 'assets/scripts.php'; ?>

<script>
    $(function() {
        $('#example').on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            let id = $(this).data('id');
            getRow(id);
        });

        $('#example').on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            let id = $(this).data('id');
            getRow(id);
        });
    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'empleados_row.php',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(response) {
                $('#empid').val(response.id);
                $('#edit_fecha').val(response.fecha);
                $('#edit_nombre').val(response.nombre);
                $('#edit_tareas').val(response.tareas);
                $('#edit_proyectos').val(response.proyectos);
                $('#edit_materiales').val(response.materiales);

                $('#del_empid').val(response.id);
                $('#del_nombre').html(response.nombre);
            }
        })
    }
</script>
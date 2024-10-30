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
                        <h2>Tareas</h2>
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
                                            <th>Fecha de inicio</th>
                                            <th>Nombre de la tarea</th>
                                            <th>Descripcion</th>
                                            <th>Estado</th>
                                            <th>Fecha de fin</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM tareas";
                                        $query = $conn->query($sql);
                                        while ($row = $query->fetch_assoc()) {
                                            $estadoTexto = '';
                                            switch ($row['estado']) {
                                                case 0:
                                                    $estadoTexto = 'Sin iniciar';
                                                    break;
                                                case 1:
                                                    $estadoTexto = 'En Proceso';
                                                    break;
                                                case 2:
                                                    $estadoTexto = 'Finalizado';
                                                    break;
                                                default:
                                                    $estadoTexto = 'Desconocido';
                                                    break;
                                            }
                                            echo "
                                                <tr>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>" . ($row['fecha_inicio'] ? date_format(date_create($row['fecha_inicio']), 'd/m/Y') : '') . "</td>
                                                    <td>" . $row['nombre_tarea'] . "</td>
                                                    <td>" . $row['descripcion'] . "</td>
                                                    <td>" . $estadoTexto . "</td>
                                                    <td>" . ($row['fecha_fin'] ? date_format(date_create($row['fecha_fin']), 'd/m/Y') : '') . "</td>
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
<?php include 'assets/tareas_modal.php'; ?>
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
            url: 'tareas_row.php',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(response) {
                $('#tarid').val(response.id);
                $('#edit_fecha_inicio').val(response.fecha_inicio);
                $('#edit_fecha_fin').val(response.fecha_fin);
                $('#edit_nombre_tarea').val(response.nombre_tarea);
                $('#edit_estado').val(response.estado);
                $('#edit_descripcion').val(response.descripcion);

                $('#del_tarid').val(response.id);
                $('#del_nombre_tarea').html(response.nombre_tarea);
            }
        })
    }
</script>
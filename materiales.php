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
                        <h2>Materiales</h2>
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
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Dirección</th>
                                            <th>Tipo</th>
                                            <th>Cantidad</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM materiales";
                                        $query = $conn->query($sql);
                                        while ($row = $query->fetch_assoc()) {
                                            echo "
                                                <tr>
                                                    <td>" . $row['id'] . "</td>
                                                    <td>" . $row['codigo'] . "</td>
                                                    <td>" . $row['nombre'] . "</td>
                                                    <td>" . $row['direccion'] . "</td>
                                                    <td>" . $row['tipo'] . "</td>
                                                    <td>" . $row['cantidad'] . "</td>
                                                    <td>" . $row['estado'] . "</td>
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
<?php include 'assets/materiales_modal.php'; ?>
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
            url: 'materiales_row.php',
            data: {
                id: id,
            },
            dataType: 'json',
            success: function(response) {
                $('#matid').val(response.id);
                $('#edit_codigo').val(response.codigo);
                $('#edit_nombre').val(response.nombre);
                $('#edit_direccion').val(response.direccion);
                $('#edit_tipo').val(response.tipo);
                $('#edit_cantidad').val(response.cantidad);
                $('#edit_estado').val(response.estado);

                $('#del_matid').val(response.id);
                $('#del_nombre').html(response.nombre);
            }
        })
    }
</script>
<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title"><b>Crear Nuevo Empleado</b></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="empleados_crud.php">
                    <input type="text" value="create" name="crud" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha">Fecha de contratación</label>
                                <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo date('d/m/Y', strtotime('fecha')); ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre">Nombre del empleado</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="tareas">Asignar tareas</label>
                                <select name="tareas" id="tareas" class="form-control">
                                    <option value="">- Seleccionar -</option>
                                    <?php
                                    $query = "SELECT * FROM tareas";
                                    $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_tarea'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="proyectos">Asignar proyectos</label>
                                <select class="form-control" id="proyectos" name="proyectos">
                                    <option value="">- Seleccionar -</option>
                                    <?php
                                    $query = "SELECT * FROM proyectos";
                                    $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="materiales">Asignar materiales</label>
                                <select class="form-control" id="materiales" name="materiales">
                                    <option value="">- Seleccionar -</option>
                                    <?php
                                    $query = "SELECT * FROM materiales";
                                    $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Editar Empleado</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="empleados_crud.php">
                    <input type="text" value="edit" name="crud" hidden>
                    <input type="text" id="empid" name="id" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_fecha">Fecha de contratación</label>
                                <input type="date" class="form-control" name="fecha" id="edit_fecha" value="<?php echo date('d/m/Y', strtotime('fecha')); ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_nombre">Nombre del empleado</label>
                                <input type="text" class="form-control" name="nombre" id="edit_nombre" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="edit_tareas">Asignar tareas</label>
                                <select name="tareas" id="edit_tareas" class="form-control">
                                    <option value="">- Seleccionar -</option>
                                    <?php
                                    $query = "SELECT * FROM tareas";
                                    $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre_tarea'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="edit_proyectos">Asignar proyectos</label>
                                <select class="form-control" id="edit_proyectos" name="proyectos">
                                    <option value="">- Seleccionar -</option>
                                    <?php
                                    $query = "SELECT * FROM proyectos";
                                    $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="edit_materiales">Asignar materiales</label>
                                <select class="form-control" id="edit_materiales" name="materiales">
                                    <option value="">- Seleccionar -</option>
                                    <?php
                                    $query = "SELECT * FROM materiales";
                                    $result = $conn->query($query);
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" name="edit">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Eliminar Empleado</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="empleados_crud.php">
                    <input type="text" value="delete" name="crud" hidden>
                    <input type="text" id="del_empid" name="id" hidden>
                    <div class="text-center">
                        <p>Desea eliminar el empleado</p>
                        <h2 id="del_nombre"></h2>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger" name="delete">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <?php
        if (isset($_SESSION['sa-success'])) {
            echo "
    <script>
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '" . $_SESSION['sa-success'] . "',
            timer: 2000,
            showConfirmButton: false
        });
    </script>
    ";
            unset($_SESSION['sa-success']);
        }

        if (isset($_SESSION['sa-error'])) {
            echo "
    <script>
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: '" . $_SESSION['sa-error'] . "',
            timer: 2000,
            showConfirmButton: false
        });
    </script>
    ";
            unset($_SESSION['sa-error']);
        }
        ?> -->
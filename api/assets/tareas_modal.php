<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title"><b>Crear Nueva tarea</b></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="tareas_crud.php">
                    <input type="text" value="create" name="crud" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha_inicio">Fecha de inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="<?php echo date('d/m/Y', strtotime('fecha_inicio')); ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha_fin">Fecha de fin</label>
                                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" value="<?php echo date('d/m/Y', strtotime('fecha_fin')); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre_tarea">Nombre de la tarea</label>
                                <input type="text" class="form-control" id="nombre_tarea" name="nombre_tarea" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado" name="estado" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="0">Sin iniciar</option>
                                    <option value="1">En proceso</option>
                                    <option value="2">Finalizado</option>
                                    <option value="3">Cancelado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="descripcion"></textarea>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Editar Tarea</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="tareas_crud.php">
                    <input type="text" value="edit" name="crud" hidden>
                    <input type="text" id="tarid" name="id" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_fecha_inicio">Fecha de inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="edit_fecha_inicio" value="<?php echo date('d/m/Y', strtotime('fecha_inicio')); ?>" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_fecha_fin">fecha de fin</label>
                                <input type="date" class="form-control" name="fecha_fin" id="edit_fecha_fin" value="<?php echo date('d/m/Y', strtotime('fecha_fin')); ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_nombre_tarea">Nombre de la tarea</label>
                                <input type="text" class="form-control" id="edit_nombre_tarea" name="nombre_tarea" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_estado">Estado</label>
                                <select class="form-control" id="edit_estado" name="estado" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="0">Sin iniciar</option>
                                    <option value="1">En proceso</option>
                                    <option value="2">Finalizado</option>
                                    <option value="3">Cancelado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_descripcion">Descripción</label>
                        <textarea class="form-control" name="descripcion" id="edit_descripcion"></textarea>
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
                <h5 class="modal-title"><b>Eliminar Tarea</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="tareas_crud.php">
                    <input type="text" value="delete" name="crud" hidden>
                    <input type="text" id="del_tarid" name="id" hidden>
                    <div class="text-center">
                        <p>Desea eliminar la tarea</p>
                        <h2 id="del_nombre_tarea"></h2>
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
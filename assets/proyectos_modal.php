<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Crear Nuevo Proyecto</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="proyectos_crud.php">
                    <input type="text" value="create" name="crud" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha_inicio">Fecha de Inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha_fin">Fecha de Fin</label>
                                <input type="date" class="form-control" name="fecha_fin" id="fecha_fin" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select name="estado" id="estado" class="form-control">
                                    <option value="">- Seleccionar -</option>
                                    <option value="Sin iniciar">Sin iniciar</option>
                                    <option value="En Progreso">En Progreso</option>
                                    <option value="Terminado">Terminado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="presupuesto">Presupuesto</label>
                                <input type="text" class="form-control" name="presupuesto" id="presupuesto" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ubicacion">Ubicación</label>
                                <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
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
                <button type="submit" class="btn btn-primary" name="add">Guardar</button>
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
                <h5 class="modal-title"><b>Editar Proyecto</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="proyectos_crud.php">
                    <input type="text" value="edit" name="crud" hidden>
                    <input type="text" id="catid" name="id" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_fecha_inicio">Fecha de Inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="edit_fecha_inicio" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_fecha_fin">Fecha de Fin</label>
                                <input type="date" class="form-control" name="fecha_fin" id="edit_fecha_fin" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="edit_nombre" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_estado">Estado</label>
                                <select name="estado" id="edit_estado" class="form-control">
                                    <option value="">- Seleccionar -</option>
                                    <option value="Sin iniciar">Sin iniciar</option>
                                    <option value="En Progreso">En Progreso</option>
                                    <option value="Terminado">Terminado</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_presupuesto">Presupuesto</label>
                                <input type="text" class="form-control" name="presupuesto" id="edit_presupuesto" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_ubicacion">Ubicación</label>
                                <input type="text" class="form-control" name="ubicacion" id="edit_ubicacion" required>
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
                <h5 class="modal-title"><b>Eliminar Proyecto</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="proyectos_crud.php">
                    <input type="text" value="delete" name="crud" hidden>
                    <input type="text" id="del_catid" name="id" hidden>
                    <div class="text-center">
                        <p>Desea eliminar el proyecto</p>
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
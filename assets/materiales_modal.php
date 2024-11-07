<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Crear Nuevo Material</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="materiales_crud.php">
                    <input type="text" value="create" name="crud" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="codigo">Código</label>
                                <input type="text" class="form-control" name="codigo" id="codigo" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección</label>
                        <textarea class="form-control" name="direccion" id="direccion"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="tipo">Tipo</label>
                                <select name="tipo" id="tipo" class="form-control" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="Herramienta">Herramienta</option>
                                    <option value="Material">Material</option>
                                    <option value="Equipo">Equipo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad" id="cantidad" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select name="estado" id="estado" class="form-control" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="En uso">En uso</option>
                                    <option value="Dañado">Dañado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
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
                <p class="modal-title"><b>Editar Material</b></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="materiales_crud.php">
                    <input type="text" value="edit" name="crud" hidden>
                    <input type="text" id="matid" name="id" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_codigo">Código</label>
                                <input type="text" class="form-control" name="codigo" id="edit_codigo" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_nombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="edit_nombre" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_direccion">Dirección</label>
                        <textarea class="form-control" name="direccion" id="edit_direccion"></textarea>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="edit_tipo">Tipo</label>
                                <select name="tipo" id="edit_tipo" class="form-control" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="Herramienta">Herramienta</option>
                                    <option value="Material">Material</option>
                                    <option value="Equipo">Equipo</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="edit_cantidad">Cantidad</label>
                                <input type="text" class="form-control" name="cantidad" id="edit_cantidad" required>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="edit_estado">Estado</label>
                                <select name="estado" id="edit_estado" class="form-control" required>
                                    <option value="">- Seleccionar -</option>
                                    <option value="Disponible">Disponible</option>
                                    <option value="En uso">En uso</option>
                                    <option value="Dañado">Dañado</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
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
                <h5 class="modal-title"><b>Eliminar Material</b></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="materiales_crud.php">
                    <input type="text" value="delete" name="crud" hidden>
                    <input type="text" id="del_matid" name="id" hidden>
                    <div class="text-center">
                        <p>Desea eliminar el Material</p>
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
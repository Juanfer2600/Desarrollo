<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Agregar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" acion="usarios_crud.php">
                    <input type="text" value="create" name="crud" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="username">Usuario</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="roles">Roles</label>
                        <select class="form-control" name="roles" id="roles" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Editar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="usuarios_crud.php">
                    <input type="text" value="edit" name="crud" hidden>
                    <input type="text" id="usuid" name="id" hidden>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_username">Usuario</label>
                                <input type="text" class="form-control" name="username" id="edit_username" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="edit_password">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="edit_password" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="edit_roles">Roles</label>
                        <select class="form-control" name="roles" id="id_roles" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
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
                <h4>Eliminar Usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="usuarios_crud.php">
                    <input type="text" value="delete" name="crud" hidden>
                    <input type="text" id="del_usuid" name="id" hidden>

                    <div class="text-center">
                        <h2 id="del_username"></h2>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger" name="delete">Eliminar</button>
            </div>
        </div>
    </div>
</div>
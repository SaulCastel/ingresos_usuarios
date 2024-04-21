</head>

<body>
    <div class="container p-5">
        <div class="mx-auto" style="max-width: 500px">
            <?php echo form_open('user/store') ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">Estado</label>
                <select class="form-select" id="state" name="state">
                    <option value="0" selected>No activo</option>
                    <option value="1">Activo</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Rol</label>
                <select class="form-select" id="role" name="role">
                    <option value="0">Administrador</option>
                    <option value="1" selected>Empleado</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
            </form>
        </div>
    </div>
</body>

</html>
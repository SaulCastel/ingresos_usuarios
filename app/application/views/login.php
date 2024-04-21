</head>
<body>
    <div class="container p-5">
        <div class="mx-auto" style="max-width: 500px">
            <h1>Login</h1>
            <?php if (isset($error)) { ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php } ?>
            <?php echo form_open('login') ?>
                <div class="form-group">
                    <label for="username">Correo electrónico:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>

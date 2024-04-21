<link href="<?= base_url('assets/css/dx.light.css') ?>" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <span class="navbar-brand" href="#">|Dashboard|</span>
        <div class="navbar-nav">
            <a class="nav-link" href=<?= base_url('admin/users') ?>>Usuarios</a>
            <a class="nav-link" href=<?= base_url('admin/payments') ?>>Pagos</a>
        </div>
        <a href=<?= base_url('logout') ?> class="btn btn-secondary ms-auto">Log out</a>
    </div>
</nav>
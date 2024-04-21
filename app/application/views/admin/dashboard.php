<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/dx.light.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Bienvenido, <?= $name ?></h1>
        <a href=<?= base_url('user/create') ?> class="btn btn-primary my-3">Crear usuario</a>
        <hr />
        <div id="dataGrid"></div>
    </div>
    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/dx.all.js') ?>"></script>
    <script>
        $(function () {
            $.get('<?= base_url('user/all') ?>', (data) => {
                $('#dataGrid').dxDataGrid({
                    dataSource: data,
                    keyExpr: 'id',
                    filterRow: { visible: true },
                    searchPanel: { visible: true },
                    columnAutoWidth: true
                });
            });
        });
    </script>
</body>

</html>
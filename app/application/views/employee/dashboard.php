<link href="<?= base_url('assets/css/dx.light.css') ?>" rel="stylesheet">
</head>
<body>
<div class="container p-5">
    <h2>Bienvenido, <?= $name ?></h2>
    <hr />
    <div id="dataGrid"></div>
</div>
<script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= base_url('assets/js/dx.all.js') ?>"></script>
<script>
    $(function () {
        $.get('<?= base_url('payment/user/'.$user_id) ?>', (data) => {
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
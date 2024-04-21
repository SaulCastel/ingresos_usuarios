<div class="container">
    <h2>Ingresar usuarios</h2>
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
                editing: {
                    allowDeleting: true,
                    mode: 'row'
                },
                onRowRemoved: (e) => {
                    const url = '<?= base_url('user/delete/') ?>';
                    $.ajax(url + e.key, { method: 'DELETE' });
                },
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
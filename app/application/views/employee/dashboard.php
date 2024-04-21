<div class="container p-5">
    <h2>Historial de pagos</h2>
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
                keyExpr: 'correlativo',
                filterRow: { visible: true },
                searchPanel: { visible: true },
                columnAutoWidth: true
            });
        });
    });
</script>
</body>

</html>
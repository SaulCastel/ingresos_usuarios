<link href="<?= base_url('assets/css/dx.light.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container p-5">
        <div class="mx-auto border p-3" style="max-width: 1000px">
            <?php echo form_open('payment/store') ?>
            <div id="form"></div>
            </form>
        </div>
    </div>
    <script src="<?= base_url('assets/js/jquery-3.7.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/dx.all.js') ?>"></script>
    <script>
        $(function () {
            $("#form").dxForm({
                formData: {
                    user: 0,
                    quantity: 0,
                    amount: 0,
                    payment_date: new Date().toLocaleDateString(),
                    ptype: '',
                    comments: '',
                },
                colCount: 2,
                items: [
                    'user',
                    'quantity',
                    'amount',
                    {
                        dataField: 'payment_date',
                        editorType: 'dxDateBox'

                    },
                    'ptype',
                    'comments',
                    {
                        itemType: "button",
                        buttonOptions: {
                            text: "Registrar pago",
                            useSubmitBehavior: true
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>
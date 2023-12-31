<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/bootstrap.min.css') ?>">

    <!-- fontawesome  -->
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
    <!-- datatable -->
    <link rel="stylesheet" href="<?= base_url('assets/datatables/datatables.min.css') ?>">
    <!-- jquery -->
    <scripit src="<?= base_url('assets/datatables/jquery.min.js') ?>"> </script>
        
        <!-- css -->
        <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
</head>

<body>
    <?= $this->renderSection('content') ?>
    <!-- bootstrap js -->
    <script src="<?= base_url('assets/bootstrap/bootstrap.bundle.min.js') ?>"></script>
    <!-- datatable -->
    <script src="<?= base_url('assets/datatables/datatables.min.js') ?>"></script>
    <!-- js -->
    <script src="<?= base_url('assets/js/style.js') ?>">

    </script>

</body>

</html>
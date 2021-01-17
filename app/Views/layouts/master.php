<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Fixed Sidebar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/fontawesome-free/css/all.min.css") ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/overlayScrollbars/css/OverlayScrollbars.min.css") ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url("plugins/daterangepicker/daterangepicker.css") ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url("dist/css/adminlte.min.css") ?>">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <?= $this->include('layouts/header') ?>

        <?= $this->include('layouts/sidebar') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1><?= $title; ?></h1>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <div class="container-fluid">
                    <?= $this->renderSection('content') ?>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?= $this->include('layouts/footer') ?>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url("plugins/jquery/jquery.min.js") ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url("plugins/bootstrap/js/bootstrap.bundle.min.js") ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") ?>"></script>
    <!-- date-range-picker -->
    <script src="<?php echo base_url("plugins/daterangepicker/daterangepicker.js") ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url("dist/js/adminlte.min.js") ?>"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url("dist/js/demo.js") ?>"></script>

    <script>
        $(function() {
            //Date range picker
            $('#reservationdate').datetimepicker({
                format: 'L'
            });
        })
    </script>
</body>

</html>
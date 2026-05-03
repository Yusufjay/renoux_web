<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel | Renoux.co</title>

    <!-- Memanggil CSS AdminLTE -->
    <link rel="stylesheet" href="<?= base_url('admin/plugins/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('admin/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar Atas -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Memanggil Component Sidebar -->
        <?= $this->include('components/sidebar') ?>

        <!-- Tempat Konten Utama -->
        <div class="content-wrapper">
            <section class="content p-4">
                <?= $this->renderSection('content') ?>
            </section>
        </div>

    </div>

    <!-- Memanggil Javascript AdminLTE -->
    <script src="<?= base_url('admin/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('admin/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>
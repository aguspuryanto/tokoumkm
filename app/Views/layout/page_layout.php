<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('plugins/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <?= $this->renderSection('styles') ?>
    <?= $this->renderSection('pageStyles') ?>

    <!-- Custom styles for this template-->
    <link href="<?= base_url('css/sb-admin-2.min.css') ?>" rel="stylesheet">

</head>

<body id="page-top">
    <?= $this->include('layout/header') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('layout/footer') ?>

</body>

</html>
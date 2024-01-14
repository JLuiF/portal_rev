<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVISTA UNA-PUNO</title>
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('public/frontend'); ?>/css/estilos.css">
    <link rel="stylesheet" href="<?= base_url('public/frontend'); ?>/css/estilos_revistas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?= base_url('public/frontend'); ?>/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <header class="inicio">
        <div class="header">
            <div class="logo">
                <img src="<?= base_url('public/frontend'); ?>/img/logoU.png" alt="">
                <p class="logotipo">REVISTA <br> UNA - PUNO</p>
            </div>
        </div>
    </header>

    <!-- include navbar -->
    <?= $this->include('layout/navbar') ?>

    <!-- render final/section content -->
    <?= $this->renderSection('content') ?>
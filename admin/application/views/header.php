<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Morodadi Radiator</title>
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css'); ?>">
    <link rel="icon" href="<?php echo base_url('../assets/images/LogoBengkel2.png') ?>" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #2D3648;">
        <div class="container">
            <a href="<?php echo base_url('welcome') ?>"><img src="<?php echo base_url('../assets/images/LogoBengkel.png') ?>" alt="" width="100px" class="logo"></a>
            <a href="<?php echo base_url('welcome') ?>" class="navbar-brand ms-2" style="font-size: 30px; font-weight: 400;">Admin Morodadi</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#naff">
                <span class="navbar-toggler-icon"> </span> </button>
            <div class="collapse navbar-collapse" id="naff">

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url('progres') ?>" class="nav-link">Kelola Progres</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('logout') ?>" class="nav-link">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
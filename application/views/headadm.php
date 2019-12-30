<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/Css/style.css') ?>" type="text/css"> 
</head>
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                 STTBandung
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="<?=base_url()?>Myadmin/tambahdata">Tambah Data <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="<?=base_url()?>Login/aksi_logout">Logout <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </div>
    </nav>

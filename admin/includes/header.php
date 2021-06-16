<?php
require 'classes/config.php';

if(isset($_GET['logout'])){
session_start();
unset($_SESSION['cLogin']);
header('location: ../');

}
require 'classes/usuario.class.php';


?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Classified Plus</title>
<link rel="stylesheet" href="../assets/css/font-awesome.min.css" />
<link href="../assets/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/owlcarousel/owl.carousel.min.css" />
<link rel="stylesheet" href="../assets/css/owlcarousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="../assets/css/estilo-admin.css" />
</head>
<body>
<div class="topbar"> 
  <!-- Header  -->
  <div class="header">
    <div class="container po-relative">
      <nav class="navbar navbar-expand-lg hover-dropdown header-nav-bar">
         <a href="01-Home-Page.html" class="navbar-brand">
      <img src="../assets/images/logo.png" alt="Classified Plus"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#h5-info" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="h5-info">
          <ul class="navbar-nav">
            <li class="nav-item"> 
            <a class="nav-link" href="<?=HOMEAdmin ?>?page=anuncios-admin" > Home </a>
                                   
            <li class="nav-item"> <a class="nav-link"  href="28-Contact_Us-Page.html">Ajuda</a></li>
          
          </ul>
          <div class="header_r d-flex">
            <div class="loin"> <a class="nav-link" href="?page=editar-user&id=" data-toggle="modal" data-target="#login"><i class="fa fa-user m-r-5"></i></a>  </div>
            <ul class="ml-auto post_ad">
              <li class="nav-item search"><a class="nav-link" href="?logout=true">Sair</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </div>
 <!-- Login -->
   <!-- Modal -->
 
  <!-- End Header  --> 
</div>
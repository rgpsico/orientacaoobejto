<?php 
         
         require 'classes/categoria.class.php';
         require 'classes/anuncios.class.php';
         $Categorias = new Categorias;
         $Anuncios = new Anuncios;
         $Usuario = new Usuario;
         $User = $Usuario->getUserByID($_SESSION['cLogin']);
       
     ?>


<!-- breadcrumb -->
<div class="iner_breadcrumb bg-light p-t-20 p-b-20">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
      </ol>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<!-- Dashboard_sec -->
<section class="dashboard_sec m-t-50">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="dashboard_menu">
          <div class="dashbord_img">
            <div class="dashboard_back"> <img class="img-fluid w-100" src="../assets/images/dash-background.png" alt="Classified Plus"> </div>
            <div class="rounded_img"> <img class="img-fluid" src="../assets/images/aditya.png" alt="Classified Plus"> </div>
            <div class="aditya"><?=$User['nome'];?></div>
          </div>
          <ul class="list-unstyled  m-t-20">
            <li><span><i class="fa fa-sliders"></i></span><a href="?page=anuncios-admin"> Dashboard </a></li>
            <li><span><i class="fa fa-cog"></i></span><a href="?page=add-anuncios">Adicionar Anuncio</a></li>
            <li><span><i class="fa fa-cog"></i></span><a href="?page=editar-user&id=<?=$_SESSION['cLogin']?>"> Meus Dados </a></li>        
            <li><span><i class="fa fa-sign-in"></i></span><a href="#"> Sair </a></li>
          </ul>
        </div>
      </div>
 
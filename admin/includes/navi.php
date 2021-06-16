<?php 
         
         require 'classes/categoria.class.php';
         require 'classes/anuncios.class.php';
         require 'classes/helpers.php';
         $Categorias = new Categorias;
         $Anuncios = new Anuncios;
         $Usuario = new Usuario;
         $User = $Usuario->getUserByID($_SESSION['cLogin']);
         $foto = ($User['foto'] == "" ? "assets/images/dash-background.png" : "assets/images/usuario/".$User['foto'] );

     ?>


<!-- breadcrumb -->
<div class="iner_breadcrumb bg-light p-t-20 p-b-20">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
      
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
            <div class="rounded_img"> <img class="img-fluid" src="<?= $foto; ?>" alt="Classified Plus"> </div>
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
 
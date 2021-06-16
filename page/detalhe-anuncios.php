<!-- breadcrumb -->
<div class="iner_breadcrumb p-t-20 p-b-20">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
      
      </ul>
    </nav>
  </div>
</div>
<!-- End breadcrumb -->

<?php
$id = $_GET['id'];

$Anuncios = new Anuncios();
$detalhe = $Anuncios->getAnuncio($id);
$fotosUnica = $Anuncios->getAnuncio($id);

?> 
<!-- Detail_part -->
<section class="detail_part m-t-50">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="detail_box"> 
   
              <img class="img-fluid" src="admin/assets/images/anuncios/<?= $fotosUnica['fotos'][0]['url']?>" alt="Classified Plus">
        
          <div class="m-t-20">
            <ul class="owl-carousel list-unstyled m-b-0" id="product_slider">
            <?php foreach($detalhe['fotos'] as $chave=> $foto): ?>
              <li> <img class="img-fluid" src="admin/assets/images/anuncios/<?= $foto['url']; ?>" alt="slide 1"> </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="detail_box">
          <div class="detail_head">
            <h3> <?= $detalhe['titulo'] ?></h3>
            <p> <?= $detalhe['descricao'] ?></p>
            <ul class="list-unstyled text-capitalize m-b-0 m-t-15">
              <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-clock-o"></i> <span><?=getDayDataCad($detalhe['dataCad']); ?>   <?=convertMesNumerForDayName(7)?></span></a> </li>
              <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-tags"></i><span> Novo </span></a> </li>

            </ul>
          </div>
          <ul class="list-unstyled d-inline-block float-left detail_left m-b-0">
            <li>Unha Básica :</li>
            <li>AcreGel :</li>
            <li>Unha de Vidro :</li>
            <li>Contato :</li>
            <li>Bairros de atendimento:</li>
            
          </ul>
          <ul class="list-unstyled d-inline-block m-l-40 detail_right  m-b-0">
            <li>Faz</li>
            <li>Faz</li>
            <li>Não Faz</li>
            <li><?=$detalhe['telefone'] ?></li>
            <li><?= $detalhe['bairro1'] ?> | <?= $detalhe['bairro2'] ?> | <?= $detalhe['bairro3'] ?> | <?= $detalhe['regiao'] ?></li>
          </ul>
        
          <div class="detail_prize p-t-10">
           
          </div>
          <div class="detail_btn d-flex m-t-20">

        <a href="https://api.whatsapp.com/send?phone=<?=$detalhe['telefone'] ?>">
            <button class="btn_chat w-100 text-white mr-3 py-2 border-0" type="submit" value="button">
              <img src="assets/images/zap.png" width="40px" height="40px" alt="">
                    </i> ZAP
            </button>
            </a>

            

          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End Description -->

<!-- Description -->
<section class="description">
  <div class="container"> 
    
    <!-- Row  -->
    <div class="row justify-content-left">
      <div class="col-md-7 text-left">
        <h2 class="title">Descrição</h2>
      </div>
    </div>
    <!-- Row  -->
    
    <div class="row">
      <div class="col-md-9">
        <div class="description_box">
          <p> <?= $detalhe['titulo'] ?> </p>
        </div>
      </div>
 
    </div>
  </div>
</section>
<!-- End Description --> 

    <div class="row">
      <div class="col-md-12">
        <div class="single-sidebar m-b-50 m-t-50 text-center"> 
        <img class="add_img img-fluid" src="assets/images/discount-img.png" alt="Classified Plus"> </div>
      </div>
    </div>
  </div>
</section>
<!-- End top_listings --> 
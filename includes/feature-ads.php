
<!-- Featured_ads -->
<section class="featured_ads bg-light">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center">
        <h2 class="title">Nossas Profissionais </h2>
        <h6 class="subtitle">Busque de acordo com sua região.</h6>
      </div>
    </div>
    <!-- Row  -->
    <div class="row">
 <?php

        $filtros = array(
          'categoria' =>'',
          'preco' => '',
          'estado'=>''
  );
  
  $pagination = 1;
  if(isset($_GET['p']) && !empty($_GET['p'])){
      $pagination = addslashes($_GET['p']);
  }


  if(isset($_GET['filtros'])){
      $filtros = $_GET['filtros'];
  }
  
     $Anuncios = new Anuncios();
     $por_pagina  = 10;
     $total_anuncios = $Anuncios->getTotalAnuncios($filtros);
     $total_paginas = ceil($total_anuncios / $por_pagina);

     $TodosAnuncios =  $Anuncios->getUltimosanuncios($pagination , $por_pagina, $filtros);                            
     foreach($TodosAnuncios as $anuncio){
    
    ?>
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
        <div class="featured-parts rounded m-t-30">
          <div class="featured-img"> <img class="img-fluid rounded-top" src="admin/assets/images/anuncios/<?= $anuncio['url'] ?>" alt="Classified Plus"/>
            <div class="featured-new"> <a href="#"> New </a> </div>
          </div>
          <div class="featured-text">
            <div class="text-top d-flex justify-content-between">
              <div class="heading"> <a href="#"><?= $anuncio['categoria'] ?></a> </div>
              <div class="book-mark"><a href="#"><i class="fa fa-bookmark"></i></a></div>
            </div>
            <div class="text-stars m-t-5">
              <p><?= $anuncio['titulo'] ?></p>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
            <div class="featured-bottum m-t-30">
              <ul class="d-flex justify-content-between list-unstyled m-b-20">
                <li><a href="?page=detalhe-anuncios&id=<?= $anuncio['id'] ?>"><i class="fa fa-map-marker"></i> <?= $anuncio['titulo'] ?></a></li>
              
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <?php } ?>


      </div>
      <button class="view-btn hvr-pulse-grow" type="submit" value="button">Ver Mais</button>
  </div>
</section>
<!-- breadcrumb -->
<div class="iner_breadcrumb p-t-20 p-b-20">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Mobile</li>
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
            <h3> <?= $detalhe['titulo'] ?><br>
            <?= $detalhe['estado'] ?> </h3>
            <p> <?= $detalhe['descricao'] ?></p>
            <ul class="list-unstyled text-capitalize m-b-0 m-t-15">
              <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-clock-o"></i> <span> 7 Jan, 17 10:10 pm </span></a> </li>
              <li class="d-inline-block p-r-20"><a href="#"> <i class="fa fa-tags"></i><span> new </span></a> </li>
              <li class="d-inline-block"><a href="#"> <i class="fa fa-eye"></i> <span> view </span> </a> </li>
            </ul>
          </div>
          <ul class="list-unstyled d-inline-block float-left detail_left m-b-0">
            <li>Handset color :</li>
            <li>Primary Camera :</li>
            <li>Processor :</li>
            <li>Screen Size :</li>
            <li>Internal Memory :</li>
          </ul>
          <ul class="list-unstyled d-inline-block m-l-40 detail_right  m-b-0">
            <li>Black</li>
            <li>13 MP</li>
            <li>1.56 GHz + 1.82 GHz</li>
            <li>5.5 Inches</li>
            <li>6 GB</li>
          </ul>
          <div class="detail_bottum m-t-15">
            <div class="row">
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <input class="form-check-input" value="" type="checkbox">
                  <label class="form-check-label"> </label>
                  <img src="assets/images/warrenty.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">Onsite Assure Warranty*<br>
                    $15 (6 months)</div>
                </div>
              </div>
              <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 col-12">
                <div class="form-check">
                  <input class="form-check-input" value="" type="checkbox">
                  <label class="form-check-label"> </label>
                  <img src="assets/images/insurance.png" alt="Classified Plus">
                  <div class="warranty d-inline-block">SyncNscan Insurance (12 mon.)<br>
                    For just $50</div>
                </div>
              </div>
            </div>
          </div>
          <div class="detail_prize p-t-10">
            <ul class="list-unstyled">
              <li class="d-inline-block pr-3"> Deal Price Price : </li>
              <li class="d-inline-block Price_m"> $950.00 </li>
            </ul>
          </div>
          <div class="detail_btn d-flex m-t-20">

        <a href="https://api.whatsapp.com/send?phone=<?=$detalhe['telefone'] ?>">
            <button class="btn_chat w-100 text-white mr-3 py-2 border-0" type="submit" value="button">
                <i class="fa fa-comment-o">
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
        <h2 class="title">Description</h2>
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
        <div class="single-sidebar m-b-50 m-t-50 text-center"> <img class="add_img img-fluid" src="assets/images/discount-img.png" alt="Classified Plus"> </div>
      </div>
    </div>
  </div>
</section>
<!-- End top_listings --> 
<?php 



if(empty($_SESSION['cLogin'])){
    header("Location: login.php");
    exit;
}



  if(isset($_GET['id']) && !empty($_GET['id'])){
      echo $id = $_GET['id'];
     $Anuncios->excluirAnuncio($id);
  }

$filtros = array(
  'categoria' =>'',
  'preco' => '',
  'estado'=>''
);

if(isset($_GET['filtros'])){
$filtros = $_GET['filtros'];
}



$total_anuncios = $Anuncios->getTotalAnuncios($filtros);




?>
      
      <div class="col-md-9">
        <div class="dashboard_main">
          <div class="dashboard_heding">
            <h3> Dashboard </h3>
          </div>
          <div class="row">

            <div class="col-xl-4 col-lg-6 col-12">
              <div class="card-content bg-white">
                <div class="card-body d-flex"> <img src="../assets/images/dash_box_1.png" alt="Classified Plus">
                  <div class="card_body_text">
                    <h4>Total de Anuncios</h4>
                    <p><?=$total_anuncios ?> Anuncios </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-12">
              <div class="card-content bg-white">
                <div class="card-body d-flex"> <img src="../assets/images/dash_box_2.png" alt="Classified Plus">
                  <div class="card_body_text">
                    <h4>Total de Visualizações</h4>
                    <p>80 Add Visualizações </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-12">
              <div class="card-content bg-white m-0">
                <div class="card-body d-flex"> <img src="../assets/images/dash_box_3.png" alt="Classified Plus">
                  <div class="card_body_text">
                    <h4>Total de Cliques</h4>
                    <p>2040 Cliques </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row mt-3">
            <div id="recent-transactions" class="col-12">
              <h4 class="card-title">Anuncios recem aprovados</h4>
              <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements"> </div>
              <div class="table">
                <table class="table table-xl mb-0 table-responsive">
                  <thead>
                    <tr>
                      <th class="border-top text-capitalize ml-44"> <input class="form-check-input" value="" type="checkbox">
                        Foto </th>
                      <th class="border-top text-capitalize">Titulo </th>
                      <th class="border-top text-capitalize">Categoria </th>
                      <th class="border-top text-capitalize">Status </th>
                      <th class="border-top text-capitalize">Preço </th>
                      <th class="border-top text-capitalize">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                          
                             
                            $TodosAnuncios =  $Anuncios->getMeusAnuncios();                            
                            foreach($TodosAnuncios as $anuncio){
                                $ruim   = "";
                                $bom    = "";
                                $otimo  = "";
                                $status = "";
            
                                switch ($anuncio['estado']) {
                                    case 0:
                                        $classes  = "btn-danger";
                                        $status   = "ruim";
                                        break;
                                    case 1:
                                        $classes  = "btn-infor'";
                                        $status   = "bom";
                                        break;
                                    case 2:
                                        $classes  = "btn-success";
                                        $status   = "otimo";
                                        break;                       
                                    }   
                                ?>
                    <tr class="border-bottom anuncios-tr" data-key="<?= $anuncio['id'] ?>">
                        <td class="text-truncate">
                          <div class="form-check">
                            <input class="form-check-input" value="" type="checkbox">
                            <div class="recent_img"> <img src="assets/images/anuncios/<?= $anuncio['url']; ?>" alt="Classified Plus" width="100px" height="100px"> </div>
                          </div></td>
                        <td class="text-truncate">
                          <p><?=$anuncio['titulo'] ?>.<br>
                            Ad ID: <?=$anuncio['id'] ?></p></td>
                        <td class="text-truncate">
                          <a href="#"><?=$anuncio['categoria'] ?></a></td>

                        <td><button type="button" class="btn btn-sm <?php echo $classes ?>"><?= $status ?></button></td>

                        <td class="text-truncate"><strong>R$ <?= utf8_decode($anuncio['valor']) ?> </strong></td>

                        <td class="text-truncate" >
                          <a href="<?= HOME ?>?page=detalhe-anuncios&id=<?= $anuncio['id']; ?>">
                          <button type="submit" value="butten">
                          <i class="fa fa-eye"></i>
                          </button>
                          </a>
                          <span>
                              <a href="?page=editar-anuncios&id=<?= $anuncio['id'] ?>">
                              <button type="submit" value="butten"> 
                              <i class="fa fa-pencil"></i> </button>
                              </a>
                          </span>

                          <span>
                               <button  value="excluir" name="excluir" >
                                    <i class="fa fa-trash" id="excluir-anuncio"></i> 
                                </button>
                          </span>
                   
                        </td>
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="single-sidebar m-t-30 m-b-50"> <img class="add_img img-fluid" src="../assets/images/discount-img.png" alt="Classified Plus"> </div>
      </div>
    </div>
  </div>
</section>

<?php 

if(empty($_SESSION['cLogin'])){
    echo "<script>window.location.href='../';</script>";
    exit;
}


if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo    = addslashes($_POST['titulo']);
   
   
    if(isset($_FILES['fotos'])){
      $fotos = $_FILES['fotos'];
  }else {
      $fotos = array();
  }

    $Categorias->addCategoria($titulo ,$fotos);

}
?>

      <div class="col-md-9">
        <div class="dashboard_profile_main">
          <div class="dashboard_heding">
            <h3>Postar Anuncio </h3>
          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
           
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Titulo Categoria</label>
                  <input type="text"  class="form-control" name="titulo" placeholder="Titulo">
                </div>
                
                <div class="img_browse">
                  <label>icone da  Categoria:</label>
                  <div class="form-group">
                    <div class="tg-fileuploadlabel">
                        <label>Por favor selecione sua imagem</label>                   
                        <input type="file"  class="form-control form-control-file text-capitalize btn-success"  name="fotos[]" multiple>
                        <span>maximo 500KB</span> </div>
                  </div>
                </div>
                           
              
                
            

                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-success" value="enviar">
              </form>
            </div>
          </div>

</section>
<!-- End Dashboard_sec -->

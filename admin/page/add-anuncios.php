<?php 

if(empty($_SESSION['cLogin'])){
    echo "<script>window.location.href='../';</script>";
    exit;
}


if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo    = addslashes($_POST['titulo']);
    $categoria = addslashes($_POST['categoria']);
    $valor     = addslashes($_POST['valor']);
    $descricao = addslashes($_POST['descricao']);
    $estado    = addslashes($_POST['estado']);
   
    if(isset($_FILES['fotos'])){
      $fotos = $_FILES['fotos'];
  }else {
      $fotos = array();
  }

    $Anuncios->addAnuncio($titulo, $categoria , $valor , $descricao , $estado, $fotos);

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
                  <label>Titulo do anuncio</label>
                  <input type="text"  class="form-control" name="titulo" placeholder="Titulo">
                </div>
                <div class="form-group selectdiv">
                  <label>Categoria</label>
                  <select class="form-control" name="categoria">
                    <option>Categoria</option>
                    <?php 
                          
                          $CategoriasList =  $Categorias->getLista();
                          foreach($CategoriasList as $Categoria){
                
                ?>
                    <option value="<?= $Categoria['id'] ?>"><?= $Categoria['nome'] ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Preço</label>
                  <input type="text"  class="form-control" placeholder="Preço" name="valor">
                </div>
                
                <div class="img_browse">
                  <label>Adicionar Foto:</label>
                  <div class="form-group">
                    <div class="tg-fileuploadlabel">
                      <label>Por favor selecione sua imagem</label>
                   
                      <input type="file"  class="form-control form-control-file text-capitalize btn-success"  name="fotos[]" multiple>
                      <span>maximo 500KB</span> </div>
                  </div>
                </div>
                
                <div class="ad_description">
                  <label>Descrição</label>
                  <div class="form-group">
                    <div class="ad_description_type">
                      <div class="note-editor">            
                        <textarea class="note-codable" name="descricao"></textarea>
                      </div>
                    </div>
                  </div> 
                </div> 

                <div class="form-group selectdiv">             
                  <label>Estado</label>
                  <select class="form-control" name="estado">
                    <option value="0">Ruim</option>
                    <option value="1">Bom</option>
                    <option value="2">Otimo</option>
                  </select>
                    <option>Otimo</option>
                  </select>
                </div>
                    </div>
                  </div>
                </div>
                <input type="submit" class="btn btn-success" value="enviar">
              </form>
            </div>
          </div>
        
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Dashboard_sec -->

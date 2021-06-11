<?php 

if(empty($_SESSION['cLogin'])){
    echo "<script>window.location.href='login.php';</script>";
    exit;
}


if(isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo    = addslashes($_POST['titulo']);
    $categoria = addslashes($_POST['categoria']);
    $valor     = addslashes($_POST['valor']);
    $descricao = addslashes($_POST['descricao']);
    $estado    = addslashes($_POST['estado']);

    if (!empty($_FILES['fotos']['size']) != false){  
      $fotos = $_FILES['fotos'];
  }else {
      $fotos = array();
  }

  $Anuncios->editAnuncio($titulo, $categoria , $valor , $descricao , $estado , $fotos , $_GET['id']);

}

if(isset($_GET['id']) && !empty($_GET['id'])){
    $id =  $_GET['id'];
    $info = $Anuncios->getAnuncio($id);
}else {
echo "<script>window.location.href='meus-anuncios.php';</script>";
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
                  <input type="text"  class="form-control" name="titulo" placeholder="Titulo" value="<?php echo utf8_encode($info['titulo']) ?>">
                </div>
                <div class="form-group selectdiv">
                  <label>Categoria</label>
                  <select class="form-control" name="categoria">
                    <option>Categoria</option>
                    <?php 
                          
                          $CategoriasList =  $Categorias->getLista();
                          foreach($CategoriasList as $Categoria){
                
                ?>
                    <option value="<?php echo $Categoria['id']; ?>"
                    <?php echo ($info['id_categoria'] == $Categoria['id']) ? 'selected="selected"' : ''  ?>>
                <?php echo utf8_encode($Categoria['nome']); ?>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Preço</label>
                  <input type="text"  class="form-control" placeholder="Preço" name="valor" value="<?php echo utf8_encode($info['valor']) ?>">
                </div>
                
                <div class="img_browse">
                  <label>Adicionar Foto:</label>
                   <div class="form-group">
                      <div class="tg-fileuploadlabel">
                        <label>Por favor selecione sua imagem</label>             
                        <input type="file"  class="form-control-file"  name="fotos[]" multiple>
                        <span>maximo 500KB</span> 
                      </div>
                   </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">Fotos anuncios:</div>
                    <div class="panel-body">
                    <?php foreach($info['fotos'] as $foto): ?>
                    <div class="foto_item">
                        <img src="assets/images/anuncios/<?php echo $foto['url']; ?>" class="img-thumbnail" >
                        <br/>
                        <a href="excluir-imagens.php?id=<?php echo $foto['id']; ?>" class="btn btn-default">Excluir imagem</a>
                    </div>
                            
                    <?php endforeach; ?>
                    </div>
                    </div>
                </div>
                
                <div class="ad_description">
                  <label>Descrição</label>
                  <div class="form-group">
                    <div class="ad_description_type">
                      <div class="note-editor">            
                        <textarea class="note-codable" name="descricao"><?php echo utf8_encode($info['descricao']) ?></textarea>                        
                      </div>
                    </div>
                  </div>
                </div>


                <?php
                     $bom = "";
                     $ruim = "";
                     $otimo = "";
                    switch ($info['estado']) {
                        case 0:
                           $ruim = " selected='selected'";
                        break;
                        case 1:
                            $bom =  " selected='selected'";
                        break;

                        case 2:
                            $otimo =  " selected='selected'";
                        break;
                    }
                    ?>
                 <div class="form-group selectdiv">
                  <label>Estado</label>
                  <select class="form-control" name="estado">
                  <option value="0"  <?php echo $ruim ?> >Ruim</option>
                <option value="1" <?php echo $bom ?>>Bom</option>
                <option value="2"<?php echo $otimo ?>>Ótimo</option>
                  </select>
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

<?php 

if(empty($_SESSION['cLogin'])){
    echo "<script>window.location.href='login.php';</script>";
    exit;
}


if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome         =    addslashes($_POST['nome']);
    $telefone     =    addslashes($_POST['telefone']);
    $email        =    addslashes($_POST['email']);
    $senha        =    addslashes($_POST['senha']);
    $novasenha    =    addslashes($_POST['novasenha']);
   $id = $_SESSION['cLogin'];

 

   $Usuario->editUser($nome , $email , $senha , $novasenha=null, $telefone, $id);

}
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id =  $_GET['id'];
    $info = $Usuario->getUserByID($id);
}else {
echo "<script>window.location.href='meus-anuncios.php';</script>";
}
?>


      <div class="col-md-9">
        <div class="dashboard_profile_main">
          <div class="dashboard_heding">
            <h3>Editar usuario </h3>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <div class="profile_detail">
           
              <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label>Nome</label>
                  <input type="text"  class="form-control" name="nome"  value="<?php echo utf8_encode($info['nome']) ?>">
                </div>

                <div class="form-group">
                  <label>Email:</label>
                  <input type="text"    class="form-control" placeholder="email" name="email" value="<?php echo $info['email'] ?>">
                
                </div>
            
                <div class="form-group">
                  <label>Telefone:</label>
                  <input type="text"  class="form-control" placeholder="telefone" name="telefone" value="<?php echo $info['telefone'] ?>">
                </div>
                        
               
               
                <div class="form-group">
                  <label>Senha:</label>
                  <input type="password"  class="form-control" placeholder="senha" name="senha" value="<?php echo $info['senha'] ?>">
                </div>

                <div class="form-group">
                  <label>Confirmar-Senha:</label>
                  <input type="password"  class="form-control" placeholder="novasenha" name="novasenha" value="<?php echo $info['senha'] ?>">
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

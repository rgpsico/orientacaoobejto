<?php 
      require 'admin/classes/config.php';
      require 'admin/classes/usuario.class.php';
         $Usuario = New Usuario();
      
        if (isset($_POST['email']) && !empty($_POST['email'])){
            $email     = addslashes($_POST['email']);
            $senha     = $_POST['senha'];

            if ($Usuario->login($email,$senha)) {
                echo "<script>window.location.href='./admin/';</script>";
            }
        }
?>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Logar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">
          <img src="assets/images/close.png"  alt="Classified Plus"></span> </button>
        </div>
        <div class="modal-body">
          <div class="or-divider">
          
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
      
              <form action="" method="post">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
              </div>
            </div>
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" value="Login">
				Entrar 
			</button>
      </form>
		</div>
          <div class="form-info">
			<div class="md-checkbox">
				<input type="checkbox" name="rememberme" id="rememberme" value="forever">
				<label for="rememberme" class="">Lembrar me</label>
			</div>
			<div class="forgot-password">
				<a href="#">Esqueceu sua senha?</a>
			</div>
		</div>
          
        </div>
        <div class="register text-center">Não se cadastrou ainda? <a href="#" data-toggle="modal" data-target="#register">Registrar</a></div>
      </div>
    </div>
  </div>
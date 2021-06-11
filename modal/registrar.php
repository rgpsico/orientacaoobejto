<?php 
     
      
        $Usuario = New Usuario();
        if(isset($_POST['nome']) && !empty($_POST['nome'])){
            $nome      = addslashes($_POST['nome']);
            $email     = addslashes($_POST['email']);
            $senha     = addslashes($_POST['senha']);
            $telefone  = addslashes($_POST['telefone']);

                if(!empty($nome) && !empty($email) && !empty($senha)){
                    if($Usuario->cadastrar($nome , $email , $senha , $telefone)){ 
                    ?>
                        <div class="alert alert-success">
                           <strong>Parabéns</strong>
                           Cadastrado com sucesso
                           <a href="login.php" class="alert-link">Faça o Login agora</a>
                        </div>
                    <?php  
                    }else {
                        ?>

                        <div class="alert alert-warning">
                        Este usuario já existe
                        <a href="login.php" class="alert-link">Faça o Login agora</a>
                        </div>
               <?php
                    }
                } else {
                    ?> 
                    <div class="alert alert-warning">
                        Prencha todos os campos
                    </div>
            <?php 
                }  
            }
            
    ?>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login to Classifieds Plus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">
          <img src="assets/images/close.png" alt="Classified Plus"></span> </button>
        </div>
        <div class="modal-body">
        <div class="list-unstyled list-inline social-login">
        <a href="#" class="facebook"> <img src="assets/images/fb.png" alt="Classified Plus">Continue wiith Facbook</a>
        <a href="#" class="google"> <img src="assets/images/google_p.png" alt="Classified Plus"> <span>Continue with Google</span></a>
        </div>
          <div class="or-divider">
            <h6>or</h6>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <form action="" method="POST">
                <input type="text" class="form-control" name="nome" placeholder="nome">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="number" class="form-control" id="telefone" name="telefone" placeholder="telefone">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" name="senha" placeholder="senha">
              </div>
            </div>
            
            <div class="col-sm-12">
              <div class="form-group has-feedback">
                <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" placeholder="Confirmar senha">
              </div>
            </div>
            
          </div>
          <div class="form-group">
			<button type="submit" class="buttons login_btn" name="login" value="Login">
				Continue 
			</button>
      </form>
		</div>
          <div class="form-info">
			<p class="text-center p-b-10">By Register I agree to receive emails.</p>
		</div>
          
        </div>
        <div class="register text-center">Already a member? <a href="#">Login</a></div>
      </div>
    </div>
  </div>  <!-- End modal  --> 
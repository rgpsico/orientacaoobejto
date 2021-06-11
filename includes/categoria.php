
<!-- Categories -->
<section class="categories">
  <div class="container"> 
    <!-- Row  -->
    <div class="row justify-content-center">
      <div class="col-md-7 text-center m-b-10">
        <h2 class="title">Categoria</h2>
        <h6 class="subtitle">Busque a Especialidade que você deseja</h6>
      </div>
    </div>
    <!-- Row  -->
    <div class="row">
      <div class="col-md-12">
      
        <ul class="list-unstyled text-center p-t-30">
        <?php 
                           
                            $Categorias = new Categorias;
                            $CategoriasList =  $Categorias->getLista();
                            foreach($CategoriasList as $Categoria){
                  
                  ?>
          <li><a href="#"><img src="assets/images/Vehicles.png" alt="Classified Plus"/>
            <p> <?=$Categoria['nome'] ?></p>
            </a> </li>
            <?php } ?>
       
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End Categories --> 
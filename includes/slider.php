
<!-- Slider -->
<section class="slider">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active"> <img src="assets/images/banner.png" alt="Classified Plus" class="slide-image">
        <div class="slide-text">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Encontre seu profissional</h1>
                <p>Temos mais de 200 profissionais.</p>
                <div>
                  <form class="book-now-home">
                    <div class="form-group">
                      <input type="text" class="form-control text-truncate" name="Nome" placeholder="Buscar Profissional">
                    </div>
                    <div class="form-group selectdiv">
                      <select class="form-control text-truncate" name="localizacao">
                        <option>Sua localização</option>
                     
                      </select>
                    </div>
                    <div class="form-group selectdiv">
                      <select class="form-control border-right-0 text-truncate" name="Categoria">
                      
                        <option>Categoria:</option>
                        <?php 
                         
                            $Categoriasa = new Categorias;
                            $CategoriasList =  $Categoriasa->getLista();
                            foreach($CategoriasList as $Categoria){
                  
                       ?>

                        <option value="<?php echo $Categoria['id'] ?>"><?php echo $Categoria['nome'] ?></option>
                     <?php } ?>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary booknow btn-skin">Buscar</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
</section>
<!-- End Slider --> 
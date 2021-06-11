
<?php 
require('admin/classes/anuncios.class.php');
require 'admin/classes/categoria.class.php';
require('includes/header.php') ?>



<?php 

if(isset($_GET['page'])){
    $page = $_GET['page'];
    
        require('page/'.$page.'.php');
}else{
    require('page/home.php');
}

?>






<?php require('includes/footer.php')?>
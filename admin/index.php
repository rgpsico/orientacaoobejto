<?php include('includes/header.php') ?>
<?php include('includes/navi.php') ?>

<?php 
$page = "home-admin";
if(isset($_GET['page']) && !empty($_GET['page'])){
$page = $_GET['page'];
include('page/'.$page.'.php');

}else{
    include('page/anuncios-admin.php');
} 

?>

<?php include('includes/footer.php') ?>

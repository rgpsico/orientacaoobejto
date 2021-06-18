<?php 
class Categorias{
    public function getLista(){
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM categoria");
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

        }
        return $array;
    }

    public function getCategoriaByID($id){
        $array = array();
        global $pdo;

        $sql = $pdo->query("SELECT * FROM categoria where id = :id");
        $sql->bindValue(":id", $id);
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();

        }
        if($sql->rowCount() == 0){
            $array = ['result'=>"usuario não entrado"];

        }
        return $array;
    }

    public function addCategoria($nome, $fotos){
        try {
        global $pdo;
       $dataCadastro = date("m-d-y");   
        $sql = $pdo->prepare("INSERT INTO categoria set  nome = :nome ");

        $sql->bindValue(":nome",$nome);
;

        $sql->execute();
        $lastID = $pdo->lastInsertId();
       
        if($fotos) {
        $this->UploadImages($fotos,$lastID);
        }
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
     
    }
}

public function UploadImages(array $fotos , $nome , $width=500, $height=500){
    global $pdo;
    
    if (count($fotos['tmp_name']) > 0){ 
        for($q=0;$q<count($fotos['tmp_name']);$q++) {
            $tipo = $fotos['type'][$q];
            if(in_array($tipo, array('image/jpeg', 'image/png'))) {
                $tmpname = md5(time().rand(0,9999)).'.jpg';
                move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/categoria/'.$tmpname);

                list($width_orig, $height_orig) = getimagesize('assets/images/categoria/'.$tmpname);
                $ratio = $width_orig/$height_orig;

                $width = 500;
                $height = 500;

                if($width/$height > $ratio) {
                    $width = $height*$ratio;
                } else {
                    $height = $width/$ratio;
                }

                $img = imagecreatetruecolor($width, $height);
                if ($tipo == 'image/jpeg') {
                    $origi = imagecreatefromjpeg('assets/images/categoria/'.$tmpname);
                } elseif ($tipo == 'image/png') {
                    $origi = imagecreatefrompng('assets/images/categoria/'.$tmpname);
                }

                imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

                imagejpeg($img, 'assets/images/categoria/'.$tmpname, 80);

                $sql = $pdo->prepare("INSERT INTO categoria SET nome = :nome, foto = :foto");
                $sql->bindValue(":nome", $nome);
                $sql->bindValue(":foto", $tmpname);
                $sql->execute();

            }
        }
    }
}

public function excluirCategoria($id){  
    global $pdo;
    $sql = $pdo->prepare("DELETE FROM categoria WHERE id = :id");
    $sql->bindValue(":id",$id);
    $sql->execute();

}


}
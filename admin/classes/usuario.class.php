<?php

class Usuario {
    private $width=500;
    private $height=500;

    public function getTotalUsuarios(){
        global $pdo;
        $sql = $pdo->query("SELECT COUNT(*) as c from usuarios");
        $row = $sql->fetch();
        return $row['c'];
    }

    public function getUserByID($id){
        global $pdo;
        $query = "SELECT * from usuarios WHERE id= :id";
        $sql = $pdo->prepare($query);
        $sql->bindValue(":id",$id);
        $sql->execute();
        if($sql->rowCount() > 0){
           $array = $sql->fetch();
          }
        return $array;
    
    }
    public function cadastrar($nome , $email , $senha , $telefone){
        global $pdo;
        $sql = $pdo->prepare("SELECT id from usuarios where email = :email");
        $sql->bindValue(":email",$email);
        $sql->execute();
        if($sql->rowCount() == 0){
            $sql  = $pdo->prepare("INSERT INTO usuarios SET nome= :nome , email= :email ,
                                    senha=:senha , telefone= :telefone");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":senha",md5($senha));
            $sql->bindValue(":telefone",$telefone);
            
            $sql->execute();
            return true;
        }else{
            return false;

        }
    }

    public function editUser($nome , $email , $senha , $novasenha, $telefone, $id , $foto){
    
        global $pdo;
    
           $sql  = $pdo->prepare("UPDATE  usuarios SET nome= :nome , email= :email ,
                                    senha=:senha , telefone= :telefone WHERE id=:id");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":senha",md5($senha));
            $sql->bindValue(":telefone",$telefone);
            $sql->bindValue(":id",$id);
            $sql->execute();

            $this->UploadImages($foto , $id);
            return true;
        
    }
    public function login($email , $senha){
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dados = $sql->fetch();
            $_SESSION['cLogin'] = $dados['id'];
            return true;
        }else {
            return false;
        }



    }

    public function UploadImages($fotos , $id_usuario){
        global $pdo;
         $width  = $this->width;
         $height = $this->height;
        
        if (count($fotos['tmp_name']) > 0){ 
            for($q=0;$q<count($fotos['tmp_name']);$q++) {
                $tipo = $fotos['type'][$q];
                if(in_array($tipo, array('image/jpeg', 'image/png'))) {
                    $tmpname = md5(time().rand(0,9999)).'.jpg';
                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/usuario/'.$tmpname);
    
                    list($width_orig, $height_orig) = getimagesize('assets/images/usuario/'.$tmpname);
                    $ratio = $width_orig/$height_orig;
    
                    $width = 500;
                    $height = 500;
    
                    if($width/$height > $ratio) {
                        $width = $height*$ratio;
                    } else {
                        $height = $width/$ratio;
                    }
    
                    $img = imagecreatetruecolor($width, $height);
                    if($tipo == 'image/jpeg') {
                        $origi = imagecreatefromjpeg('assets/images/usuario/'.$tmpname);
                    } elseif($tipo == 'image/png') {
                        $origi = imagecreatefrompng('assets/images/usuario/'.$tmpname);
                    }
    
                    imagecopyresampled($img, $origi, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
    
                    imagejpeg($img, 'assets/images/usuario/'.$tmpname, 80);
    
                    $sql = $pdo->prepare("UPDATE  usuarios SET  foto = :foto WHERE id=:id_anuncio");
                    $sql->bindValue(":id_anuncio", $id_usuario);
                    $sql->bindValue(":foto", $tmpname);
                    $sql->execute();
    
                }
            }
        }
    }

}
?>
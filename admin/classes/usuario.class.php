<?php

class Usuario {

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

    public function editUser($nome , $email , $senha , $novasenha, $telefone, $id){
    
        global $pdo;
    
           $sql  = $pdo->prepare("UPDATE  usuarios SET nome= :nome , email= :email ,
                                    senha=:senha , telefone= :telefone WHERE id=:id");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":email",$email);
            $sql->bindValue(":senha",md5($senha));
            $sql->bindValue(":telefone",$telefone);
            $sql->bindValue(":id",$id);
            $sql->execute();
            return true;
        
    }
    public function login($email , $senha){
        global $pdo;
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email",$email);
        $sql->bindValue(":senha",md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['cLogin'] = $dado['id'];
            return true;
        }else {
            return false;
        }



    }

}
?>
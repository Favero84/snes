<?php
class Usuarios {
    
    public function addCadastro($nome, $email, $senha) {
        
        global $pdo;
        
        $sql = $pdo->prepare("SELECT id FROM cadastrar WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        
        if($sql->rowCount() == 0) {
        
        $sql = $pdo->prepare("INSERT INTO cadastrar SET nome = :nome, email = :email, senha = :senha");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
        
        return true;
    } else {
        return false;
    }
}
    
    public function logar($email, $senha) {
        
        global $pdo;
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['cLogin'] = $dado['id'];
            
            return true;
        } else {
            return false;
        }
    }
}


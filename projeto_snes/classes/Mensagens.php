<?php
class Mensagens {
    
    public function addMensagem($nome, $email, $mensagem) {
        
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO mensagens SET nome = :nome, email = :email, mensagem = :mensagem");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":mensagem", $mensagem);
        $sql->execute();
    }
    
    public function addComentario($nome, $comentario) {
        
        global $pdo;
        
        $sql = $pdo->prepare("INSERT INTO comentarios SET nome = :nome, comentario = :comentario");
        $sql->bindValue(":nome", $nome);
        $sql->bindValue(":comentario", $comentario);
        $sql->execute();
    }
}


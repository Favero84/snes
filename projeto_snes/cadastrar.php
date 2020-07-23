<?php require 'pages/header.php'; ?>

<?php 
require 'config.php'; 
require 'classes/Usuarios.php';

$u = new Usuarios();

if(isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    $u->addCadastro($nome, $email, $senha);
    
    header("Location: index.php");
}

?>

<div class="formcad">
    <div class="titulocad">
        Cadastre-se
    </div>
    <form method="POST">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>     
        <br/>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" />
        </div>
        <br/>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" class="form-control" />
        </div>    
        <br/>
        <input type="submit" value="Cadastrar" class="btn btn-default" />
    </form>
</div>    

<?php require 'pages/footer.php';
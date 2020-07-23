<?php require 'pages/header.php'; ?>

<?php 
require 'config.php';
require 'classes/Usuarios.php';

$u = new Usuarios();

if(isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));
    
    if($u->logar($email, $senha)) {
       header("Location: index.php"); 
    }
 
}

?>

<div class="formlogin">
    <div class="titulologin">
        Login
    </div>
    <form method="POST">
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
        <input type="submit" value="Fazer Login" class="btn btn-default" />
    </form>
</div>    

<?php require 'pages/footer.php'; ?>

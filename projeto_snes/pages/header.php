<html>
    <head>
        <meta charset="UTF-8">
        <title>S N E S</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="menutopo">
            <ul>
                <a href="./"><li>HOME</li></a>
                <a href=""><li>JOGOS</li></a>
                <a href=""><li>NOTÍCIAS</li></a>
                <a href=""><li>SOBRE</li></a>
                <a href="contato.php"><li>CONTATO</li></a>
            </ul>
        </div>
        
        <div class="menulogincad">
            <ul>
                <?php if(isset($_SESSION['cLogin']) && !empty($_SESSION['cLogin'])): ?>
                    <li><a href="meusProdutos.php">Meus Produtos</a></li>
                    <li><a href="sair.php">Sair</a></li>
                <?php else: ?>
                    <a href="cadastrar.php"><li>Cadastre-se</li></a>
                    <a href="login.php"><li>Login</li></a>
                <?php endif; ?>    
            </ul>
        </div>


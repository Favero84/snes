<html>
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head> 
    <body>
        
        <?php
        require 'config.php';
        require 'classes/Mensagens.php';
        
        $m = new Mensagens();
        
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $mensagem = addslashes($_POST['mensagem']);
            
            $m->addMensagem($nome, $email, $mensagem);
            
            header("Location: index.php");
        }
        ?>
        
        <div class="colorfundo">
            
            <div class="contato">
                <div class="titulocontato">C o n t a t o</div>
                
                <form method="POST">
                    
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="nome" class="form-control" name="nome" id="nome" />
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" />
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                    </div>  
                    <br/>
                    <button type="submit" class="btn btn-default">Enviar Mensagem</button>  
                </form>
            </div>
        </div>    
    </body>
</html>
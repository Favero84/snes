<?php require 'pages/header.php'; ?>

        <?php
            require 'config.php';
            require 'classes/Mensagens.php';
            
            $m = new Mensagens();
            
            if(isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $comentario = addslashes($_POST['comentario']);
                
                $m->addComentario($nome, $comentario);
            }
        ?>
        
        <div class="main">
            <div class="imagemain">
                <img src="assets/images/principalSnes.jpg" width="1100" height="500" />
            </div>
            <div class="jogos">
                <img src="assets/images/1.jpg" />
                <img src="assets/images/2.jpg" />
                <img src="assets/images/3.jpg" />
                <img src="assets/images/4.jpg" />
                <img src="assets/images/5.jpg" />
                <img src="assets/images/6.jpg" />
                <img src="assets/images/7.jpg" />
                <img src="assets/images/8.jpg" />
                <img src="assets/images/9.jpg" />
                <img src="assets/images/10.jpg" />
                <img src="assets/images/11.jpg" />
                <img src="assets/images/12.jpg" />
                <img src="assets/images/13.jpg" />
                <img src="assets/images/14.jpg" />
                <img src="assets/images/15.jpg" />
                <img src="assets/images/16.jpg" />
                <img src="assets/images/17.jpg" />
                <img src="assets/images/18.jpg" />
                <img src="assets/images/19.jpg" />
                <img src="assets/images/20.jpg" />
                <img src="assets/images/21.jpg" />
                <img src="assets/images/22.jpg" />
                <img src="assets/images/23.jpg" />
                <img src="assets/images/24.jpg" />
                <img src="assets/images/25.jpg" />
                <img src="assets/images/26.jpg" />
                <img src="assets/images/27.jpg" />
                <img src="assets/images/28.jpg" />
                <img src="assets/images/29.jpg" />
                <img src="assets/images/30.jpg" />
                <img src="assets/images/31.jpg" />
                <img src="assets/images/32.jpg" />
            </div>
            <div class="conteudo">
                <div class="mapa">
                    <a href="mapa.php"><img src="assets/images/mapa.png" width="570" height="300" /></a>
                </div>
                <div class="textomapa">
                    <div class="titulotextomapa">
                    <strong>Mapa Mario Bros</strong><br/>
                    </div>
                    <strong>
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros 
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros
                    Mapa classico desenvolvido pela equipe Nintendo, para a produçao do incrivel Mario Bros
                    </strong>
                </div>
            </div>
          
            <div class="conteudo3">
                <div class="imagemmario">
                    <img src="assets/images/mario.jpg" width="570" height="300" />
                </div>
                <div class="textomario">
                    <div class="titulomario">
                        <strong>Bigodes e Encanamentos</strong>
                    </div>
                    <strong>
                        Como falar de Super Nintendo sem mencionar o encanador bigodudo? A princípio, Super Mario 
                        All-Stars era o cartucho que vinha junto com os aparelhos recém-adquiridos. Mais tarde 
                        foi Super Mario World que ocupou o lugar oficial de primeiro jogo do console.
                        <br/>
                        Já a versão Slim da plataforma trazia consigo Super Mario World 2: Yoshis Island. 
                        E não é só por acompanharem os consoles que os irmãos italianos forjaram seus nomes 
                        na história. Mario acabou por se tornar a mascote da Nintendo, encabeçando tudo que fosse 
                        referente à marca.
                    </strong>
                </div>
            </div>
            
            <div class="conteudo2">
                <div class="fotojoystick">
                    <img src="assets/images/joystick.jpg" width="570" height="300" />
                </div>
                <div class="textojoystick">
                    <div class="titulojoystick">
                    <strong>Referência em joystick</strong><br/>
                    </div>
                    <strong>
                    O joystick consistia em um direcional analógico controlado pela mão esquerda e no lado 
                    direito os botões X, B, A e Y, dispostos em formato de cruz. Nas extremidades superiores, 
                    bem ao alcance dos dedos indicadores, os bumpers R (right, direita) e L (left, esquerda). 
                    Estão aí os controladores como todos nós conhecemos e mais gostamos até hoje.
                    <br/>
                    A própria “Big N” inovou alguns anos mais tarde com o Wii e seus controles duplos e separados. 
                    Porém, o padrão até hoje é o mesmo. Desde PlayStation, passando por Xbox e DreamCast, 
                    todos os consoles têm um controlador baseado no design de SNES. Principalmente ao que se 
                    refere aos botões L e R e “gatilhos”.
                    </strong>
                </div>
            </div>
            
            <div class="conteudo4">
                <div class="imagemmortal">
                    <img src="assets/images/mk3.jpg" width="570" height="300" />
                </div>
                <div class="textomortal">
                    <div class="titulomortal">
                        <strong>Mortal Kombat 3</strong>
                    </div>
                    <strong>
                        Sinceramente sempre fui muito dividido entre o Mega Drive e o Super Nintendo. Comecei 
                        com o console da SEGA, até que em certo ponto troquei-o pelo Super Nintendo com meu primo. 
                        Então, posso dizer que isso mudou desde que comprei o cartucho de Mortal Kombat 3. Depois, 
                        foi só descobrir os códigos para desabilitar a defesa dos personagens e fatalities com um 
                        botão só, que tudo começou a fazer mais sentido. MK, para mim, é o segundo melhor jogo de 
                        luta já feito até hoje, e foi coroado com o Ultimate Mortal Kombat 3.
                    </strong>
                </div>
            </div>
        </div>
  
        <div class="comentarios">
            <div class="titulocomentarios">
                Deixe sua mensagem:
            </div>
            <form method="POST">
                
                <div class="form-group">
                    <label for="name">Nome:</label>
                    <input type="nome" class="form-control" name="nome" id="nome" />
                </div>    
                <br/>
                <div class="form-group">
                    <label for="comentario">Comentário:</label>
                    <textarea name="comentario" id="comentario" class="form-control"></textarea>
                </div>    
                <br/>
                <div class="botao">
                    <button type="submit" class="btn btn-default">Enviar Comentário</button>
                </div>
            </form>
        </div>
        
        <?php
        global $pdo;
        $sql = "SELECT * FROM comentarios";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0) {
            foreach ($sql->fetchAll() as $comentario):
                ?>
        <div class="acertacoment">
            <hr/>
                <?php echo $comentario['nome']; ?><br/>
                
                <?php echo "Comentário: ".$comentario['comentario']; ?>
        </div>   
        <?php
         endforeach;
            }
        ?>
        
<?php require 'pages/footer.php'; ?>



<?php
session_start();
?>
 
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login </title>
    <link rel="stylesheet" href="css/teste.css" />

</head>
 <br><br>
 <h1> Login ADM</h1><br>
<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box"><br><br>
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="email" name="text" class="input is-large" placeholder="Seu usuário" autofocus=""required>
                                </div>
                            </div><br>
 
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha"required>
                                </div>
                            </div><br>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form><br>
                        <h1><a href="hotelzinho.html">Sair</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="rodape"> 
<h4 style="color: blue;">Feito por:BIT...</h4>
</footer>
  

</body>
 
</html>
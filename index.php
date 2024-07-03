<?php
include("pages/1-config.php");
session_start();

$aviso = "";
if(isset($_GET['logar'])){
    if($Estado == "fechado"){
        $aviso = "<h4 style='color: white;'>usuário ou senha invalida</h4>";
    }else{
        header("location: pages/2-login.php");
    }

    
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="stylesheet" href="assets/estilo.css">
</head>
<body>
    <header>
        <div>
            <?php 
                $estado = $sql->prepare("SELECT * FROM adminis WHERE nivel = 1");
                $estado->execute();

                foreach ($estado as $estado) {
                    if($estado['statu'] == "fechado"){
                        $Estado = $estado['statu']; 
                        $mensagem = "Estamos fechados no momento, retornaremos em breve";
                    }else{
                        $Estado = $estado['statu']; 
                        $mensagem = "Faça o seu pedido agora";
                    }
                    
            ?>
                    <h2 style="text-transform: uppercase;"><?php echo $Estado?></h2>
            <?php
                }
            ?>
            
            <h3><?php echo $mensagem?></h3>
        </div>
    </header>

    <div class="container">
        <div class="banner">
            <img src="img/banner3.jpg" alt="">
            <a href="?logar">COMPRAR AGORA</a>
        </div>


        <div class="servicos">
            <section>
                <img src="img/icon1.png" alt="">
                <h2>Encontre aqui o melhor catalogo de pães.</h2>
            </section>
        
            <section>
                <img src="img/icon2.png" alt="">
                <h2>Temos as melhores padarias como nossos parceiros.</h2>
            </section>

            <section>
                <img src="img/icon3.png" alt="">
                <h2>O seu pão a distancia de um click</h2>
            </section>
        </div>

        <h1 class="lema">UMA PADARIA 100% ONLINE</h1>
    </div>

    <footer>
        <div class="detalhes">
            <section>
                <h1>Sobre nós</h1>
                <p>Olá, nós somos a PADARIA ONLINE uma startup pertencente ao grupo FAÇO POR TI com origem e objectivo em dinamizar e otimizar a tarefa de ir até a uma padaria, isso mesmo, a PADARIA ONLINE surge no mercado a fim de possibilitar os consumidores de pães da Rua 5 fazerem suas compras apenas com um acionar de um botão.</p>
            </section>

            <section>
                <h1>Contatos</h1>
                <p>Faça ja a sua adesão</p>
                <p>Numeros: 9xx xxx xxx / 9xx xxx xxx</p>
                <p>Emails: tal@gmail.com / outro@gmail.com</p>
            </section>
        </div>

        <p class="copy">©2024 - Todos os direitos reservados, criação e desenvolvimento Orgulhosamente criado por FAÇO POR TI</p>
    </footer>
</body>
</html>
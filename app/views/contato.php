<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo : ' Contato - INNOVA CLICK - Agência web' ?></title>
    <!-- reset sempre será o primeiro link -->
    <link rel="stylesheet" href="<?php BASE_URL?>http://localhost/innovaclick/public/assets/css/reset.css"/>
    <!-- animação banner -->
    <link rel="stylesheet" href="http://localhost/innovaclick/public/assets/css/slick.css"/>
    <link rel="stylesheet" href="http://localhost/innovaclick/public/assets/css/slick-theme.css"/>
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--  style sempre sera o ultimo link -->
    <link rel="stylesheet" href="http://localhost/innovaclick/public/assets/css/style.css"/>
</head>
<body>
    <!-- Inicio do cabeçalho -->
    <header>
        <?php require_once('template/topo.php'); ?>
    </header>
    <!-- Inicio do conteúdo -->
    <main>
        <!-- banner -->
        <?php require_once('template/banner.php'); ?>

        <!-- CONTEÚDO DO CONTATO -->
        <section class="contato">
            <article class="site">
                <h2>Formulário de Contato</h2>
                <?php
                if(isset($mensagem) && isset($status)){
                    if($status == 'sucesso'){
                        echo '<div class="alerta-sucesso"> ' . $mensagem . '</div>';
                    }elseif($status == 'erro'){
                        echo '<div class="alerta-erro"> ' . $mensagem . '</div>';
                    }
                }
                ?>
                <form action="contato/enviarEmail" method="post">
                    <div>
                        <label>Nome&#58;</label><br>
                        <input type="text" name="nome" placeholder="Digite seu nome completo" required><br>
                        <label>Telefone&#58;</label><br>
                        <input type="text" name="tel" placeholder="Digite seu telefone" required><br>
                        <label>E-mail&#58;</label><br>
                        <input type="text" name="email" placeholder="Digite seu e-mail" required><br>
                    </div>
                    <div>
                        <label> Mensagem</label><br>
                        <textarea name="mensagem" cols="50" rows="6" placeholder="Digite sua mensagem" required></textarea><br>
                        <div>
                            <input type="submit" value="ENVIAR">
                            <input type="reset" value="LIMPAR">
                        </div>
                    </div>
                </form>
            </article>
        </section>
        <!-- FIM CONTEÚDO DO CONTATO -->
        <!-- serviço -->
        <?php require_once('template/servico.php'); ?>
        <!-- sobre -->
        <!-- equipe -->
        
    </main>
    <!-- Inicio do rodapé -->
    <footer>
        <!-- rodape -->
        <?php require_once('template/rodape.php'); ?>
        <p>Desenvolvido por: Henryque Nonato - Senac SMP - TIPI-02</p>
    </footer>
    <!-- Script font ansoware - icones -->
    <script src="https://kit.fontawesome.com/bedd2811b0.js" crossorigin="anonymous"></script>
    <!-- jquery - script paraa trabalhar com animações -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- animação banner -->
    <script type="text/javascript" src="http://localhost/innovaclick/public/assets/js/slick.min.js"></script>
    <!-- minha animação -->
    <script src="http://localhost/innovaclick/public/assets/js/animacao.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titulo) ? $titulo : ' Contato - INNOVA CLICK - Agência web' ?></title>
    <!-- reset sempre será o primeiro link -->
    <link rel="stylesheet" href="<?php BASE_URL ?>assets/css/reset.css"/>
    <!-- animação banner -->
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/slick-theme.css" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--  style sempre sera o ultimo link -->
    <link rel="stylesheet" href="assets/css/style.css"/>
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
        <!-- serviço -->
        <?php require_once('template/servico.php'); ?>
        <!-- sobre -->
        <?php require_once('template/sobre.php'); ?>
        <!-- equipe -->
        <?php require_once('template/equipe.php'); ?>
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
    <script type="text/javascript" src="assets/js/slick.min.js"></script>
    <!-- minha animação -->
    <script src="assets/js/animacao.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOVA CLICK - Agência web</title>
    <!-- reset sempre será o primeiro link -->
    <link rel="stylesheet" href="css/reset.css"/>
    <!-- animação banner -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!--  style sempre sera o ultimo link -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
    <!-- Inicio do cabeçalho -->
    <header>
        <?php require_once('conteudo/topo.php') ?>
    </header>
    <!-- Inicio do conteúdo -->
    <main>
        <!-- banner -->
        <?php require_once('conteudo/banner.php') ?>

        <!-- CONTEÚDO DO CONTATO -->
        <section class="contato">
            <article class="site">
                <h2>Formulário de Contato</h2>
                <form action="email.php" method="post">
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
        <?php require_once('conteudo/servico.php') ?>
        <!-- sobre -->
        <?php require_once('conteudo/sobre.php') ?>
        <!-- equipe -->
        <?php require_once('conteudo/equipe.php') ?>
    </main>
    <!-- Inicio do rodapé -->
    <footer>
        <!-- rodape -->
        <?php require_once('conteudo/rodape.php') ?>
        <p>Desenvolvido por: Henryque Nonato - Senac SMP - TIPI-02</p>
    </footer>
    <!-- Script font ansoware - icones -->
    <script src="https://kit.fontawesome.com/bedd2811b0.js" crossorigin="anonymous"></script>
    <!-- jquery - script paraa trabalhar com animações -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-3.4.0.min.js"></script>
    <!-- animação banner -->
    <script type="text/javascript" src="js/slick.min.js"></script>
    <!-- minha animação -->
    <script src="js/animacao.js"></script>
</body>
</html>
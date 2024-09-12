<!DOCTYPE php>
<php>

<head>
    <title>Contato - Sapo Chuvoso </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="container">
        <header>
            <div class="text-center">
                <img src="assets/images/Sapo Chuvoso.png" class="img-fluid logo">
                <div class="text-center">Sapo Chuvoso</div>
                <ul class="menu">
                    <li><a href="index.php">Inicial</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li>Serviços</li>
                    <li><a href="contato.php" >Contato</a></li>
                </ul>
            </div>
        </header>
        <main>
            <div>
                <h1 id="clique_exercicio">Contato</h1>
                <p>Entre em contato com nossa empresa!</p>
                <div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="form_exercicio">
                        <div>
                            <label for="form_nome">Digite seu nome</label>
                            <input type="text" id="form_nome" name="nome">
                        </div>
                        <div>
                            <label for="form_email">Digite seu e-mail</label>
                            <input type="text" id="form_email" name="email">
                        </div>
                        <div>
                            <label for="form_mensagem">Digite sua mensagem</label>
                            <textarea id="form_mensagem" placeholder="Digite a mensagem completa" name="mensagem"></textarea>
                        </div>
                        <button type="submit" id="botao">Enviar via botão</button>
                        <input type="submit" value="Enviar via atributo do input">
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <p class="text-center">Todos os direitos reservados</p>
        </footer>
    </div>


    <script src="assets/js/scripts.js"></script>
</body>

</php>
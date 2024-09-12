<!DOCTYPE php>
<php>

<head>
    <title>Inicial - Sapo Chuvoso </title>
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
                
                <?php 
                    include __DIR__ . '/menu.php'
                ?>

            </div>
        </header>

        <main>

            <div>
                <h1 class="text-center">Os melhores guarda chuvas personalizados de todo o Brasil!!</h1>
                <p>Nossa empresa trabalha com criação de guarda chuvas personalizados de todos os tipos, desde modelos modernos, até mesmo modelos classicos orientais feitos de papel e madeira!</p>
            </div>
        </main>
        <footer>
            <p class="text-center">Todos os direitos reservados</p>
        </footer>
    </div>
</body>

</php>
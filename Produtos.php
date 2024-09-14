<!DOCTYPE php>
<php>

<head>
    <title>Produtos - Sapo Chuvoso </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .image-gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around; /* Distribui o espaço entre as imagens */
            gap: 20px; /* Espaço entre as imagens */
        }

        .image-gallery img {
            width: 200px; /* Define a largura das imagens */
            height: auto; /* Mantém a proporção */
            border-radius: 8px; /* Bordas arredondadas, opcional */
        }

        h1 {
            text-align: center;
        }

        .text-center {
            text-align: center;
        }
    </style>
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
                    <li><a href="Produtos.php">Produtos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
        </header>
        <main>
            <div class="position-relative">
                <h1>Alguns dos nossos Produtos ↓</h1>
                <div class="image-gallery">
                    <img src="assets/images/GuardaChuvaCasteloAnimado.png" class="img-fluid" alt="">
                    <img src="assets/images/GuardaChuvaTotoro.jpg" class="img-fluid" alt="">
                    <img src="assets/images/GuardaChuvaBrancoFlorido.jpg" class="img-fluid" alt="">
                    <img src="assets/images/GuardaChuvaVerdeLaranjaAmarelo.jpg" class="img-fluid" alt="">
                    <img src="assets/images/GuardaChuvaAmareloBordaPreta.jpg" class="img-fluid" alt="">
                    <img src="assets/images/GuardaChuvaVermelhoAzul.jpg" class="img-fluid" alt="">
                    <img src="assets/images/GuardaChuvaLaranjaFlorido.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </main>
        <footer>
            <p class="text-center">-Todos os direitos reservados a Sapo Chuvoso-</p>
        </footer>
    </div>
</body>

</php>

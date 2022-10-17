<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta - Compre Venda e Doe Alimentos</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    


<header class="header">

    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> Cesta </a>

    <nav class="navbar">
        <a href="/">Home</a>
        <a href="produtos">Produtos</a>
        <a href="#products">Categorias</a>
        <a href="#categories">Sobre</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <a href="register"><div class="fas fa-user" id="login-btn"></div></a>
    </div>

    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>

    <div class="shopping-cart">
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-1.png" alt="">
            <div class="content">
                <h3>watermelon</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-2.png" alt="">
            <div class="content">
                <h3>onion</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="box">
            <i class="fas fa-trash"></i>
            <img src="image/cart-img-3.png" alt="">
            <div class="content">
                <h3>chicken</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">qty : 1</span>
            </div>
        </div>
        <div class="total"> total : $19.69/- </div>
        <a href="#" class="btn">checkout</a>
    </div>

    

</header>



<section class="home" id="home">

    <div class="content">
        <h3>Compre, Venda ou Doe<br> <span>Cestas Básicas</span> e<span> Alimentos</span></h3>
        <p>Tem uma cesta básica ou algum alimento sobrando em casa? Aqui você pode vender, doar e até mesmo comprar alimentos.</p>
        <a href="#features" class="btn">Explorar</a>
    </div>

</section>



<section class="features" id="features">

    <h1 class="heading"> Como <span>Funciona</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/announcement.png" alt="">
            <h3>Anuncie!</h3>
            <p>Tem alimentos sobrando? Você pode anunciar seus alimentos em nosso site! </p>
            <a href="register" class="btn">Saiba Mais</a>
        </div>

        <div class="box">
            <img src="image/buy.png" alt="">
            <h3>Compre</h3>
            <p>Além de anunciar, você também pode comprar cestas básicas e alimentos anunciados.</p>
            <a href="register" class="btn">Saiba Mais</a>
        </div>

        <div class="box">
            <img src="image/food.png" alt="">
            <h3>Doações</h3>
            <p>Quer ajudar alguém ou está precisando de algum alimento? Nós também temos a opção de doação!</p>
            <a href="register" class="btn">Saiba Mais</a>
        </div>

    </div>

</section>



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> Cesta <i class="fas fa-shopping-basket"></i> </h3>
            <p>Confira também nossas redes sociais:</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>Contato</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +11 99999-9999 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +11 99999-9999 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> email@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Senac SBC </a>
        </div>

        <div class="box">
            <h3>Links Rápidos</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Home </a>
            <a href="produtos" class="links"> <i class="fas fa-arrow-right"></i> Produtos </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Categorias </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> Sobre </a>
        </div>

        <div class="box">
            <h3>Notícias</h3>
            <p>Se inscreva para receber as novidades!</p>
            <input type="email" placeholder="seu email" class="email">
            <input type="submit" value="Inscrever-se" class="btn">
            <img src="image/payment.png" class="payment-img" alt="">
        </div>

    </div>

   
</section>
















<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

</body>
</html>
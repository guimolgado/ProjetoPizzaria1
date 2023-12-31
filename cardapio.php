<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="https://icons.iconarchive.com/icons/iconarchive/fat-sugar-food/64/Pizza-icon.png" width="64" height="64">
    <title>Cardápio - Pizzaria UNIFAA</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom">
        <div class="container-fluid navbar-custom">
            <a class="navbar-brand navbar-custom" href="#">Pizzaria Unifaa</a>
            <button
                class="navbar-toggler navbar-custom"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon navbar-custom"></span>
            </button>
            <div class="collapse navbar-collapse navbar-custom" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item navbar-custom">
                        <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cardapio.php">Cardápio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <h1>Cardápio</h1>
        
</header>
<div class="sabores">
    <div class="botao1">
    <p id="calabresa">Calabresa</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZCLB.jpg">
    <button>Adicionar ao carrinho</button>
    </div>
    <div class="botao1">
    <p id="quatro">Quatro queijos</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZFQ.jpg" alt="">
    <button>Adicionar ao carrinho</button>
    </div>
    <div class="botao1">
    <p id= "peperoni">Peperoni</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZPEP.jpg" alt="">
    <button>Adicionar ao carrinho</button>
</div>
    <div class="botao1">
    <p id= "muçarela">Muçarela com catupiry</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZMUS.jpg" alt="">
    <button>Adicionar ao carrinho</button>
    </div>
</div>
<div class="sabores2">
    <div class="botao1">
    <p id= "catuperoni">Catuperoni</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZCU.jpg" alt="">
    <button>Adicionar ao carrinho</button>
    </div>
    <div class="botao1">
    <p id= "catubeleza">Catubeleza</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZECAL.jpg" alt="">
    <button>Adicionar ao carrinho</button>
    </div>
    <div class="botao1">
    <p id= "camarao1">Frango com catupity</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZPLF.jpg" alt="">
    <button>Adicionar ao carrinho</button>
    </div>
    <div class="botao1">
    <p id= "camarao2">Pão de alho</p>
    <img src="https://cache.dominos.com/olo/6.122.2/assets/build/market/BR/_pt/images/img/products/larges/S_PIZALHO.jpg" alt="">
    <button>Adicionar ao carrinho</button>
    </div>
</div>





    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Pizzaria UNIFAA. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

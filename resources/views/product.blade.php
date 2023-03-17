<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="/css/styles.css" rel="stylesheet"/>
    <link href="/css/custom.css" rel="stylesheet"/>  
    <title>Інтернет Магазин: Продукт</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Techno Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">На головну</a></li>
                        <li class="nav-item"><a class="nav-link" href="/categories">Категорії</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Детальніше</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">Усі товари</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Популярні товари</a></li>
                                <li><a class="dropdown-item" href="#!">Нові поставки</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Корзина
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1 class="product__title">
                    {{$product}}
                </h1>

                <h4 class="product__cost">Ціна: 4 439₴</h4>
                <img src="/images/i5intelcore.jpg" alt="i5intelcore" class="product__img" width="480px" height="480px">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br/>Quod aliquam aut alias voluptatem optio possimus mollitia qui sequi? Labore, vero similique <br/>architecto quod temporibus molestiae totam saepe sed ad corrupti!</p>
            </div>
        </div>
        <footer class="py-5 bg-dark custom-footer">
            <div class="container"><p class="m-0 text-center text-white">Copyright Techno Shop &copy; <br>Author: Derelyk Timur<br>All rights reserved</p></div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
</body>
</html>
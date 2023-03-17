<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techno Shop: {{$category}}</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/">Techno Shop</a>
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
        
    <div class="container">
        <h3 class="h3-custom-cpu-title">
            {{ $category->name}}
        </h3>    
        <div class="row">
            <div class="custom-card">
                <img src="/images/i5intelcore.jpg" alt="#" class="custom-card-img" width="256px" height="256px">
                <div class="custom-card-body">
                    <div class="custom-card-title">Intel Core I5-12600K</div>
                    <p class="card-text">{{$category->description}}</p>
                    <div class="buttons-container">
                        <a href="#" class="btn btn-primary">В корзину</a>
                        <a href="#" class="btn btn-secondary">Детальніше</a>
                    </div>
                </div>
            </div>
            <div class="custom-card">
                <img src="/images/i5intelcore.jpg" alt="#" class="custom-card-img" width="256px" height="256px">
                <div class="custom-card-body">
                    <div class="custom-card-title">Intel Core I5-12600K</div>
                    <p class="card-text">{{$category->description}}</p>
                    <div class="buttons-container">
                        <a href="#" class="btn btn-primary">В корзину</a>
                        <a href="#" class="btn btn-secondary">Детальніше</a>
                    </div>
                </div>
            </div>
    </div>
</div>
    <footer class="py-5 bg-dark custom-footer">
        <div class="container"><p class="m-0 text-center text-white">Copyright Techno Shop &copy; <br>Author: Derelyk Timur<br>All rights reserved</p></div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
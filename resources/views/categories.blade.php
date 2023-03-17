<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/custom.css">  
    <link rel="stylesheet" href="css/responsive.css">
    <title>Інтернет Магазин: Усі категорії</title>
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
    <div class="container">
        <!-- <div class="col-12 d-flex justify-content-center align-items-center flex-column">
            <img src="/images/U0580081_big.jpg" alt="cpu-img" class="cpu-img" width="128px" height="128px">
            <a href="/" class="cpu-link">Процесори</a>
        </div> -->
        <h3 class="text-left title__categories">Комп'ютерні комплектуючі</h3>
        <div class="row text-center product-container">
            @foreach ($categories as $category)
            <div class="col-sm product-card">
                <img src="/images/motherboard.jpg" alt="motherboard" class="motherboard">
                <a href="/{{$category->code}}" target="_blank" class="product-link"><p>{{$category->name}}</p></a>
            </div>
            @endforeach
            {{-- <div class="col-sm product-card">
                <img src="/images/cpu.jpg" alt="cpu" class="cpu">
                <a href="/cpu" target="_blank" class="product-link">Процесори</a>
            </div>
            <div class="col-sm product-card">
                <img src="/images/videocards.jpg" alt="videocards" class="videocards">
                <a href="/videocards" target="_blank" class="product-link">Відеокарти</a>
            </div>
            <div class="col-sm product-card">
                <img src="/images/ram.jpg" alt="ram" class="ram">
                <a href="/ram" target="_blank" class="product-link">Оперативна пам'ять</a>
            </div>
            <div class="col-sm product-card">
                <img src="/images/hdd.jpg" alt="hdd" class="hdd">
                <a href="/hdd" target="_blank" class="product-link block-style">Жорсткі диски</p></a>
            </div>
            <div class="col-sm product-card">
                <img src="/images/frostsystem.jpg" alt="frostsystem" class="frostsystem">
                <a href="/frostsystem" target="_blank" class="product-link block-style">Система охолодження</a>
            </div> --}}
        </div>
    </div>
    <footer class="py-5 bg-dark custom-footer">
        <div class="container"><p class="m-0 text-center text-white">Copyright Techno Shop &copy; <br>Author: Derelyk Timur<br>All rights reserved</p></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
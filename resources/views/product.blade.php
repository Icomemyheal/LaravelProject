@extends('master')

@section('title', 'Techno Shop: Товар')

@section('content')
        <div class="container mt-5">
            <div>
                {{-- <h1 class="product__title">
                    {{$product}}
                </h1>

                <h4 class="product__cost">Ціна: 4 439₴</h4>
                <img src="/images/i5intelcore.jpg" alt="i5intelcore" class="product__img" width="480px" height="480px">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. <br/>Quod aliquam aut alias voluptatem optio possimus mollitia qui sequi? Labore, vero similique <br/>architecto quod temporibus molestiae totam saepe sed ad corrupti!</p>
                <a class="btn btn-success" href="/basket">В корзину</a> --}}
                {{-- <div class="card border-dark mb-3" style="max-width: 21rem;">
                    <div class="card-header">Товар: {{$product}}</div>
                    <img src="/images/i5intelcore.jpg" alt="i5intelcore" class="product__img" width="320px" height="320px">
                    <div class="card-body text-dark text-left">
                      <h5 class="card-title">Dark card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div> --}}
                  <div class="card mb-3 card-product-container" style="max-width: 580px;">
                    <div class="row g-0">
                        <h2 class="card-header">{{$product}}</h2>
                      <div class="col-md-4">
                        <img src="/images/i5intelcore.jpg" class="img-fluid rounded-start" alt="product">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body card-body-product">
                          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          <div class="buttons-container">
                            <a href="/" class="btn btn-primary">На головну</a>
                            <a href="/order/basket" class="btn btn-success">В корзину</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
@endsection
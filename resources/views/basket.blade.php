@extends('master')

@section('title', 'Techno Shop: Корзина')

@section('content')
<section class="h-100 h-custom" style="background-color: transparent;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12">
          <div class="card card-registration card-registration-2" style="border-radius: 15px;">
            <div class="card-body p-0">
              <div class="row g-0">
                <div class="col-lg-8">
                  <div class="p-5">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                      <h1 class="fw-bold mb-0 text-black">Кошик</h1>
                      <h6 class="mb-0 text-muted">Усього товару: product count</h6>
                    </div>
                    <hr class="my-4">
                    
                    @foreach ($order->products as $product)
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <img
                          src="/images/i5intelcore.jpg"
                          class="img-fluid rounded-3" alt="product">
                      </div>
                      <div class="col-md-2 col-lg-2 col-xl-2">
                        <h6 class="text-black mb-0 responsive-text">{{ $product->name }}</h6>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 d-flex">
                        <button class="btn btn-danger">-</button>

                        <form action="{{ route('basket-add', $product) }}" method="POST">
                        <button type="submit" class="btn btn-success">+</button>
                        @csrf
                        </form>
                      </div>
                      <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                        <h6 class="mb-0 responsive-text">{{ $product->price }}</h6>
                      </div>
                      <div class="col-md-2 col-lg-2 col-xl-2 offset-lg-1">
                        <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-secondary responsive-text responsive-btn">Детальніше</a>
                      </div>
                    </div>
                    @endforeach
                    <hr class="my-4">
  
                    <div class="pt-5">
                      <h6 class="mb-0"><a href="/" class="text-body"><i
                            class="fas fa-long-arrow-alt-left me-2"></i>Повернутись в магазин</a></h6>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 bg-grey">
                  <div class="p-5">
                    <h3 class="fw-bold mb-5 mt-2 pt-1">Замовлення</h3>
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-4">
                      <h5 class="text-uppercase">Товарів 3</h5>
                      <h5>44.00 ₴</h5>
                    </div>
  
                    <hr class="my-4">
  
                    <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">До сплати</h5>
                      <h5>44.00 ₴</h5>
                    </div>
  
                    <button type="button" class="btn btn-dark btn-block btn-lg rounded-5 btn-custom-confirm"
                      data-mdb-ripple-color="dark">Оформити замовлення</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
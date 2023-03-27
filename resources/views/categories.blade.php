@extends('master')

@section('title', 'Techno Shop: Усі категорії')

@section('content')
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
                <a href="{{ route('category', $category->code) }}" target="_blank" class="product-link"><p>{{$category->name}}</p></a>
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
@endsection
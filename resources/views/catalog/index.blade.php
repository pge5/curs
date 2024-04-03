@extends('layout.site', ['title' => 'Каталог товаров'])

@section('content')
    <h1>Каталог товаров</h1>

    <p> <span style="color:black; font-size:25px">В данный момент у нас доступны следующие товары:</span><br /> </p>

    <h2 class="mb-4">Разделы каталога</h2>
    <div class="row">
        @foreach ($roots as $root)
            @include('catalog.part.category', ['category' => $root])
        @endforeach
    </div>

    <h2 class="mb-4">Популярные бренды</h2>
    <div class="row">
        @foreach ($brands as $brand)
            @include('catalog.part.brand', ['brand' => $brand])
        @endforeach
    </div>
@endsection



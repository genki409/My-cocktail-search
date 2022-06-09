<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/search_show.css') }}">

</head>
@extends('tops.search')
@section('search')

    <body>
        <div class="back-btn" id="nav">
            <a href="javascript:history.back()">戻る</a>
        </div><!-- /.guid -->
        <main class="main-container">
            <div class="main">
                <div class="main-top">
                    <p class="top-title">{{ $posts['cocktail_digest'] }}</p>
                    <h1 class="top-name">{{ $posts['cocktail_name'] }}</h1>
                </div>

                <div class="main-middle">
                    <img class="main-middle-img" src="{{ asset('img/sample_zin_KH.jpeg') }}" alt="">
                    <div class="middle-date">
                        <div class="middle-base">
                            <h5>Base</h5>
                            <div class="base">{{ $posts['base_name'] }}</div>
                        </div>
                        <div class="middle-taste">
                            <h5>taste</h5>
                            <div class="taste">{{ $posts['taste_name'] }}</div>
                        </div>
                        <div class="middle-arc">
                            <h5>Alc.</h5>
                            <div class="arc">{{ $posts['alcohol'] }}%</div>
                        </div>
                    </div>
                </div>
                <div class="main-bottom">
                    <h6>~このお酒について~</h6>
                    <p class="cocktail-detail">{{ $posts['cocktail_desc'] }}</p>
                    <hr class="hr">
                    <h6>~作り方と材料~</h6>
                    @foreach ($posts['recipes'] as $recipe)
                    <div class="ingredient">
                        <div class="ingredient-name">{{ $recipe['ingredient_name'] }}</div>
                        <div class="amount">{{ $recipe['amount'] }}{{ $recipe['unit'] }}</div>
                    </div>
                    <hr class="hr-2">
                    @endforeach
                    <p class="make">{{ $posts['recipe_desc'] }}</p>
                </div>
            </div>
        </main>
        <div class="back-btn-bt">
            {{-- <a class="front" href="#">
            << 前へ</a> --}}
            <a href="javascript:history.back()">戻る</a>
            {{-- <a class="next" href="#">次へ >></a> --}}
        </div><!-- /.guid -->
    </body>
@endsection

</html>

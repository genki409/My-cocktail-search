<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/search.css">
    <title>検索結果 - ここ酒</title>
</head>
@extends('layouts.layouts')
@section('content')
    {{-- <div class="container"> --}}
        <section class="body">
            <form method="get" action="{{ route('searches.index') }}">
                <div class="search">
                    <div class="serchin">
                        <img src="/img/search-pic1.png" alt="文字装飾" class="pic1">
                        <div class="content">
                            <div class="one">
                                <label for="word">フリーワード</label>
                                <input class="free" type="text" id="word" name="word" minlength="1"
                                    maxlength="50" size="41" placeholder="マティーニ ライム シンプル etc…">
                            </div>
                        </div>

                        <div class="two">
                            <div class="content">
                                <label for="base_id">お酒のベース</label>
                                <div class="select-wrap">
                                    <select name="base_id" id="base_id"
                                        {{ Form::select('base_id', [
                                            null => '選択なし',
                                            1 => 'ジン',
                                            2 => 'ウォッカ',
                                            3 => 'テキーラ',
                                            4 => 'ラム',
                                            5 => 'ウイスキー',
                                            6 => 'ブランデー',
                                            7 => 'リキュール',
                                            8 => 'ワイン',
                                            9 => 'ビール',
                                            10 => '日本酒',
                                            0 => 'ノンアルコール',
                                        ]) }}
                                        </select>
                                </div>
                            </div>

                            <div class="content">
                                <label for="taste_id">甘口-辛口</label>
                                <div class="select-wrap">
                                    <select name="taste_id" id="taste_id"
                                        {{ Form::select('taste_id', [
                                            null => '選択なし',
                                            1 => '甘口',
                                            2 => '中甘口',
                                            3 => '中口',
                                            4 => '中辛口',
                                            5 => '辛口',
                                        ]) }}
                                        </select>
                                </div>
                            </div>

                            <div class="content">
                                <label for="alcohol">度数</label>
                                <div class="select-wrap">
                                    <select name="alcohol" id="alcohol"
                                        {{ Form::select('alcohol', [
                                            null => '選択なし',
                                            '0 0' => 'ノンアルコール',
                                            '1 10' => '1~10(弱め)',
                                            '11 20' => '11~20(普通)',
                                            '21 30' => '21~30(やや強い)',
                                            '31 40' => '31~40(強い)',
                                            '41 100' => '41~ (とても強い)',
                                        ]) }}
                                        </select>
                                </div>
                            </div>
                            <img src="/img/search-pic2.png" alt="カクテルの画像" class="pic2">
                        </div>
                        <button class="button" href="#"><img src="/img/search-button.png" alt="検索ボタン"></button>
                    </div>
                </div>
            </form>
        </section>
    {{-- </div> --}}
    @yield('search')
    @endsection
</html>

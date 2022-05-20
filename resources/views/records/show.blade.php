<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>思い出詳細 - ここ酒</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    @extends('layouts.layouts')
    @section('content')
        <div class="page-top">
            <div class="page-top-left">
                <h1>出会ったお酒たち。</h1>
            </div><!-- /.page-top-left -->
        </div><!-- /.page-top -->

        <div class="main">
            <section class="main-top">
                <div class="main-top-container">
                    <div class="main-head">
                        <a href="#">>> 思い出一覧に戻る</a>
                        <a href="{{ route('records.edit', $record->id) }}"><img src="/img/show-edit-button.png"
                                height="80px" alt="編集する"></a>
                    </div>
                </div>
            </section>

            <section class="display">
                    <div class="displey-container">
                        <div class="display-left">
                            <div class="display-img">
                                <p>{{ $record->created_at }}</p>
                                <h1>{{ $record->name }}</h1>
                                <img src="/img/show-free.png" alt="お酒の写真">
                            </div>
                        </div>
                        <div class="display-right">
                            <div class="word">
                                <p class="item">ベース</p>
                                <p class="none">{{ $record->base }}</p>
                            </div>
                            <div class="word">
                                <p class="item">味</p>
                                <p class="none">{{ $record->taste }}</p>
                            </div>
                            <div class="word">
                                <p class="item">特徴</p>
                                <p class="none">{{ $record->featuru }}</p>
                            </div>

                            <div class="material">
                                <h1>材料</h1>
                                <div class="one">
                                    <div class="test">{{ $record->ingredient }}</div>
                                </div>
                                <div class="material">
                                    <h1>コメント</h1>
                                    <div class="text">
                                        {{ $record->comment }}
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <div class="push"></div>
    @endsection

</body>

</html>

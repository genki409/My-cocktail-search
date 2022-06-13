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

@extends('layouts.layouts')
@section('content')
<body>

    <main class="main">
        <div class="page-top">
            <div class="page-top-left">
                <h1>出会ったお酒たち。</h1>
            </div><!-- /.page-top-left -->
        </div><!-- /.page-top -->

        <div class="main-container">
            <section class="main-top">
                <div class="main-top-container">
                    <div class="main-head">
                        <a href="#">>> 思い出一覧に戻る</a>
                        <a class="edit-btn" href="{{ route('records.edit', $record->id) }}"><button>編集する</button></a>
                    </div>
                </div>
            </section>

            <section class="display">
                    <div class="display-container">
                        <div class="display-left">
                            <div class="display-item">
                                <p>{{ $record->created_at }}</p>
                                <h1>{{ $record->name }}</h1>
                                <div class="display-image">
                                    <img src="../../img/{{ $record->image }}" alt="お酒の写真">
                                </div>
                            </div>
                        </div>
                        <div class="display-right">
                            <div class="word">
                                <h3>ベース</h3>
                                <p class="note">{{ $record->base }}</p>
                            </div>
                            <div class="word">
                                <h3>味</h3>
                                <p class="note">{{ $record->taste }}</p>
                            </div>
                            <div class="word">
                                <h3>特徴</h3>
                                <p class="note">{{ $record->feature }}</p>
                            </div>

                            <div class="right-middle">
                                <div class="right-middle-top">
                                    <h3>材料</h3>
                                    <p class="sentence">{{ $record->ingredient }}</p>
                                </div>
                                <div class="right-middle-bottom">
                                    <h3>コメント</h3>
                                    <p class="sentence">{{ $record->comment }}</p>
                                </div>


                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </main>


</body>
@endsection

</html>

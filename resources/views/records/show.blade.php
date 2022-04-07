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
        <div class="main-top">
            <div class="main-top-left">
                <h1>出会ったお酒たち。</h1>
            </div><!-- /.main-top-left -->
            <div class="main-top-right">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img
                                            src="{{ asset('img/show-record-list_btn1.png') }}" alt="思い出登録"></a>
                                </li>
                            </ul>
                            <div class="memory-count">
                                <p>思い出保存数　46</p>
                            </div><!-- /.memory-count -->
                            <form class="d-flex search-box">
                                <input class="form-control fas" type="search" placeholder="&#xf002; 思い出を検索"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit" style="display: none;"></button>
                            </form>
                        </div><!-- /.collapse /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div><!-- /.main-top-right -->
        </div><!-- /.main-top -->

        <div class="main">
            <section class="nav1">
                <div class="nav2">
                    <a href="#">
                        << 前へ</a>
                            <a href="#">戻る</a>
                            <a href="#">次へ >></a>
                </div>
            </section>

            <section class="frame">
                <div class="detail">
                    <div class="head">
                        <a href="#">>> 思い出一覧に戻る</a>
                        <a href="{{ route('records.edit', $record->id) }}"><img src="/img/show-edit-button.png"
                                height="80px" alt="編集する"></a>
                    </div>
                </div>
            </section>

            <section class="frame">
                <div class="center">
                    <div class="centerin">
                        <div class="calumn">
                            <div class="left">
                                <p>{{ $record->created_at }}</p>
                                <h1>{{ $record->name }}</h1>
                                <img src="/img/show-free.png" alt="お酒の写真">
                            </div>
                        </div>
                        <div class="right">
                            <div class="block">
                                <p class="square">ベース</p>
                                <p class="none">{{ $record->base }}</p>
                            </div>
                            <div class="block">
                                <p class="square">味</p>
                                <p class="none">{{ $record->taste }}</p>
                            </div>
                            <div class="block">
                                <p class="square">特徴</p>
                                <p class="none">{{ $record->featuru }}</p>
                            </div>

                            <div class="material">
                                <h1 class="sub">材料</h1>
                                <div class="one">
                                    <div class="menu">{{ $record->ingredient }}</div>
                                    <div class="amount">{{ $record->quantity }}</div>
                                </div>
                                <div class="one">
                                    <div class="menu">{{ $record->ingredient2 }}</div>
                                    <div class="amount">{{ $record->quantity2 }}</div>
                                </div>
                                <div class="one">
                                    <div class="menu">{{ $record->ingredient3 }}</div>
                                    <div class="amount">{{ $record->quantity3 }}</div>
                                </div>

                                <div class="material">
                                    <h1 class="sub sub1">コメント</h1>
                                    <div class="one one1">
                                        {{ $record->comment }}
                                    </div>
                                </div>


                            </div>
                        </div>
            </section>

            <section class="nav1">
                <div class="nav2">
                    <a href="#">
                        << 前へ</a>
                            <a href="#">戻る</a>
                            <a href="#">次へ >></a>
                </div>
            </section>
        </div>

        <div class="push"></div>
    @endsection

</body>

</html>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
    <!-- リセットcss -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 自作css -->
    <link rel="stylesheet" href="css/search_result.css">
    <!-- webフォント -->
    <link rel="stylesheet" href="fonts/Senobi-Gothic-Medium.ttf">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7d803bff65.js" crossorigin="anonymous"></script>
</head>

<body>
    @extends('layouts.layouts')
    @section('content')
        <main class="main">
            <div class="main-middle">
                <div class="cards">
                    <div class="row">
                        @foreach ($posts as $post)
                            <a href="{{ route('searches.show', $post['cocktail_id']) }}/#nav" class="col-lg-4 col-md-6 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="japanese">{{ $post['cocktail_name'] }}</h2>
                                        <h4 class="english">{{ $post['cocktail_name_english'] }}</h4>
                                    </div><!-- /.card-body -->
                                    <div class="card-date">
                                        <div class="card-base">
                                            <h5>Base</h5>
                                            <div class="base-date">{{ $post['base_name'] }}</div>
                                        </div>
                                        <div class="card-taste">
                                            <h5>Taste</h5>
                                            <div class="taste-date">{{ $post['taste_name'] }}</div>
                                        </div>
                                        <div class="card-alc">
                                            <h5>Alc.</h5>
                                            <div class="alc-date">{{ $post['alcohol'] }}%</div>
                                        </div>
                                    </div>
                                    <div class="cocktail-img">
                                        <img class="cocktail-search2" src="/img/cocktail-search2.jpeg" alt="">
                                    </div>
                                </div><!-- /.card -->
                            </a>
                        @endforeach
                    </div><!-- /.row -->
                </div><!-- /.cards -->
            </div>
            <!-- ページトップボタン -->
            <div class="main-bottom">
                <a href="#page-top"><img class="top-btn-img" src="img/top.png" alt=""></a>
            </div>
        </main>
    @endsection
</body>

</html>

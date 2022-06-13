<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/create.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7d803bff65.js" crossorigin="anonymous"></script>
    
    <title>新規登録</title>
</head>
<body class="body">
    @extends('layouts.layouts')
    @section('content')
        <main class="main">
            <div class="main-top">
                <h2>新規登録</h2>
                <img class="glass" src="img/create_top.png" alt="グラス">
            </div>
            <div class="input-form-outside">
                <div class="input-form">
                    <form action="{{ route('records.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-top">
                                <div class="top-left">
                                    <div class="top-left-container">
                                        <!-- ここにプレビュー画像を追加する -->
                                        <div class="upload-img">
                                            <div id="preview"></div>
                                        </div>
                                        <label class="upload-label">
                                            写真を選ぶ
                                            <input type="file" id="example" name="image" id="image" multiple>
                                        </label>
                                    </div>
                                </div>
                                <div class="top-right">
                                    <div class="top-right-container">
                                        <div class="date">
                                            <label for="start">日付</label>
                                            <input type="date" id="today" name="date-form">
                                        </div>
                                        <div class="name">
                                            <label for="name">名前</label>
                                            <input type="text" name="name" class="name-form" placeholder="ジントニック">
                                        </div>
                                        <div class="base">
                                            <label for="base">ベース</label>
                                            <input type="text" name="base" class="base-form" placeholder="ジン">
                                        </div>
                                        <div class="taste">
                                            <label for="taste-form">味</label>
                                            <input type="text" name="taste" class="taste-form" placeholder="中辛口">
                                        </div>
                                        <div class="featuru">
                                            <label for="featuru-form">特徴</label>
                                            <textarea name="feature" cols="30" rows="5" placeholder="シンプル、さっぱり（自由入力）"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-middle">
                                <div class="ingredient-top">
                                    <h4>材料</h4>
                                </div>
                                <div class="ingredient-text">
                                    <textarea  name="ingredient" cols="110" rows="10" placeholder="材料や作り方など"></textarea>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <h4>コメント</h4>
                                <div class="comment">
                                    <textarea  name="comment" cols="110" rows="10"></textarea>
                                </div>
                            </div>
                            <!-- 登録ボタン -->
                            <div class="register">
                                <button type="submit" class="register-btn">登録する</button>
                            </div>
                    </form>
                </div>
            </div>
            <div class="memory">
                <a class="memory-list" href="{{ route('records.index') }}">>> 思い出一覧に戻る</a>
            </div>
        </main>
    <script src="js/create.js"></script>
    @endsection
</body>
</html>
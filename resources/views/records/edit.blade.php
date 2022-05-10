<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    {{-- <link rel="stylesheet" href="css/edit.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
    
    <title>編集</title>
</head>

<body class="body">
    @extends('layouts.layouts')
    @section('content')
        <main class="main">
            <div class="main-top">
                <h2>編集</h2>
                <img class="lemon" src="img/lemon.png" alt="グラス">
            </div>
            <div class="input-form-outside">
                <div class="input-form">
                    <form action="{{ route('records.update', $record->id) }}" method="POST">
                      @csrf
                      @method('put')
                        <div class="form-top">
                            <div class="top-left">
                                <div class="top-left-container">
                                    <!-- 👇ここにプレビュー画像を追加する -->
                                    <div class="upload-img">
                                        <div id="preview"></div>
                                    </div>
                                    <label class="upload-label">
                                        写真を選ぶ
                                        <input type="file" id="example" name="image" multiple>
                                    </label>
                                </div>
                            </div>
                            <div class="top-right">
                                <div class="top-right-container">
                                    <div class="date">
                                        <label for="start">日付</label>
                                        <input type="date" id="today" name="date-form" >
                                    </div>
                                    <div class="name">
                                        <label for="name">名前</label>
                                        <input type="text" name="name" class="name-form" value="{{ $record->name }}">
                                    </div>
                                    <div class="base">
                                        <label for="base">ベース</label>
                                        <input type="text" name="base" class="base-form" value="{{ $record->base }}">
                                    </div>
                                    <div class="taste">
                                        <label for="taste-form">味</label>
                                        <input type="text" name="taste" class="taste-form" value="{{ $record->taste }}">
                                    </div>
                                    <div class="featuru">
                                        <label for="featuru-form">特徴</label>
                                        <textarea name="featuru" cols="30" rows="5">{{ $record->featuru }}</textarea>
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
                        </div>
                        <div class="form-bottom">
                            <h4>コメント</h4>
                            <div class="comment">
                                <textarea  name="comment" cols="110" rows="10">{{ $record->comment }}</textarea>
                            </div>
                        </div>
                        <!-- 登録ボタン -->
                        <div class="register-derete">
                            <button type="submit" class="register-btn">登録する</button>
                            <form action='{{ route('records.destroy', $record->id) }}' method='post'>
                                @csrf
                                @method('delete')
                                  <input type='submit' value='削除' class="derete-btn" onclick='return confirm("本当に削除しますか？");'>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
            <div class="memory">
                <a class="memory-list" href="{{ route('records.index') }}">>> 思い出一覧に戻る</a>
            </div>
        </main>
        <script src="js/edit.js"></script>
    @endsection
</body>

</html>

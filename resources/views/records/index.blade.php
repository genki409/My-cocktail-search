<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>記録一覧</title>
    <!-- リセットCSS -->
    <link rel="stylesheet" href="reset.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- 自作CSS -->
    {{-- <link rel="stylesheet" href="css/index.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/fb677ce336.js" crossorigin="anonymous"></script>
</head>

@extends('layouts.layouts')
@section('content')

    <body>
        <div class="container-bg">
            <div class="container">
                <main>
                    <div class="main-top">
                        <div class="main-top-left">
                            <h1>出会ったお酒たち。</h1>
                        </div><!-- /.main-top-left -->
                        <div class="main-top-right">
                            <div class="create-btn">
                                <a href="{{ route('records.create') }}"><button class="memories-record">思い出を記録</button></a>
                            </div>

                        </div><!-- /.main-top-right -->
                    </div><!-- /.main-top -->
                    <div class="cards">
                        <div class="row">
                            @foreach ($records as $record)
                                <a href="{{ route('records.show', $record->id) }}" class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
                                    <div class="card">
                                        {{-- <img src="{{ $record->image }}" alt="" class="card-img"> --}}
                                        <img src="{{ asset('img/Sample-img.jpg') }}" alt="" class="card-img">
                                        <div class="card-body">
                                            <p class="card-title">{{ $record->name }}</p>
                                            <p class="card-date">{{ $record->created_at }}</p>
                                        </div><!-- /.card-body -->
                                    </div><!-- /.card -->
                                </a>
                            @endforeach
                        </div><!-- /.row -->
                    </div><!-- /.cards -->
                    <div class="page-top-btn">
                        <a href="#page-top"><i class="fas fa-angle-up"></i></a>
                    </div><!-- /.page-top -->
                </main>
            </div><!-- /.container -->
        </div><!-- /.container-bg -->
    </body>
@endsection

</html>

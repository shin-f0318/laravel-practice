@extends('layouts.app')
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="内容確認">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{-- <link rel="stylesheet" href="/css/style.css"> --}}
        <title>一覧画面</title>
    </head>

    
    <body style="padding: 60px 0;">
        <header>
            <h1>一覧画面</h1>

            <nav class="navbar navbar-light bg-light fixed-top" style="height: 60px;">
                <div> 
                    
                    <a href="index" class="navbar-brand">一覧画面</a>
                    <a href="contact" class="navbar-brand">お問合せページ</a>
                </div>
            </nav>
        </header> 
        @section('content')
        <main>
            <article>
                <div class="container">
                    <h1 class="fs-2 my-3">お問合せ一覧</h1>
                    <div class="card mb-3">
                        <div class="card-body">
                            <table>
                                <tr>
                                    <div>
                                        <th>ID</th>
                                        <th>氏名</th>
                                        <th>フリガナ</th>
                                        <th>メールアドレス</th>
                                        <th>電話番号</th>
                                        <th>お問合せ内容</th>
                                        <th>ご希望の連絡先</th>
                                    </div>
                                </tr>
                                
                                @foreach ($contents as $content)
                                    <tr>
                                        <td>{{$content->id}}</td>
                                        <td>{{$content->name}}</td>
                                        <td>{{$content->hurigana}}</td>
                                        <td>{{$content->email}}</td>
                                        <td>{{$content->tel}}</td>
                                        <td>{{$content->message}}</td>
                                        <td>{{$content->contact}}</td>
                                        <td><a href="{{ route('practice.edit', $content) }}" class="btn btn-outline-primary d-block me-1">編集</a></td>
                                        <td><a href="{{ route('practice.destroy', $content) }}">削除</a></td>
                                    </tr>  
                                    </tr>  
                                @endforeach
                                
                            </table>
                        </div>
                    </div>
                </div>
            </article>
        </main>

        <footer class="d-flex justify-content-center align-items-center bg-light fixed-bottom" style="height: 60px;">
            <div>
                <a href="index">一覧画面</a>
                <a href="contact">お問合せページ</a> 
            </div>
            <p class="text-muted small mb-0">&copy; 投稿アプリ All rights reserved.</p>
        </footer>
    </body>
</html>
@endsection
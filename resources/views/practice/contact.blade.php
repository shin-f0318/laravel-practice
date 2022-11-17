@extends('layouts.app')

<!DOCTYPE html>
<html>
    <head>
        <title>お問い合わせ</title>
        <meta charset="utf-8">
        <meta name="description" content="お問い合わせ先">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite(['resources/js/app.js'])
    </head>

    <body style="padding: 60px 0;">
        <header>
            <h1>お問合せ</h1>

            <nav class="navbar navbar-light bg-light fixed-top" style="height: 60px;">
                <div>
                    <a href="login">ログイン画面</a>
                    <a href="index">一覧画面</a>
                    <a href="contact">お問合せページ</a>
                </div>
            </nav>
        </header>
       
        @section('content')

        <section>
        <form action="{{ route('practice.store') }}" method="post">
        @csrf
            <div class="form-group mb-3">
                <div>
                    <label>名前</label>
                </div>
                <div>
                    <input type="text" class="form-control" name="name" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                <label>フリガナ</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="hurigana" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                    <label>メールアドレス</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="email" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                    <label>電話番号</label>
                    <br>
                </div>
                <div>
                    <input type="text" class="form-control" name="tel" placeholder="入力してください">
                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                  <label>お問い合わせ内容</label>
                  <br>
                </div>
                <div>
                  <textarea class="form-control" placeholder="入力してください" name="message"></textarea>

                </div>
            </div>

            <div class="form-group mb-3">
                <div>
                  <label>ご希望の連絡先</label>
                  <br>
                </div>
                <div>
                  <input type="radio" value="電話" name="contact" checked><label>お電話</label>
                  <input type="radio" value="メール" name="contact"><label>メール</label>
                  <input type="radio" value="どちらでも" name="contact"><label>どちらでも</label>
                </div>
            </div>
            
            <div>
                <input type="submit" class="btn btn-outline-primary" value="送信">
            </div>
        </form>
        </section>

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
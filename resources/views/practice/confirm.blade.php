<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="内容確認">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <title>お問合せ履歴</title>
    </head>

    <body>
        <header>
            <h1>登録完了</h1>
            <nav>
                <a href="{{ route('practice.index') }}">一覧画面</a>
                <a href="{{ route('practice.contact') }}">お問合せページ</a>
            </nav>
        </header>

        <h2>下記内容で登録が完了いたしました。</h2>
        <form action="{{ route('practice.confirm') }}" method="post">
            <p>お名前:{{$show_content->name}}</p>
            <p>フリガナ:{{$show_content->hurigana}}</p>
            <p>メールアドレス:{{$show_content->email}}</p>
            <p>電話番号:{{$show_content->tel}}</p>
            <p>お問い合わせ内容：{{$show_content->message}}</p>
            <p>ご希望の連絡先：{{$show_content->contact}}</p>
        </form>
    </body>
</html>

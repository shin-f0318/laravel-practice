<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="内容確認">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/style.css">
        <title>一覧画面</title>
    </head>

    <body>
        <header>
            <h1>一覧画面</h1>

            <nav>
                <a href="contact">お問合せページ</a>
            </nav>

        </header>
        <h2>お問合せ一覧</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>フリガナ</th>
                <th>メールアドレス</th>
                <th>電話番号</th>
                <th>お問合せ内容</th>
                <th>ご希望の連絡先</th>
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
                    <td><a href="{{ route('practice.edit') }}" class="btn btn-primary btn-sm">編集</a></td>
                </tr>  
            @endforeach
        </table>
    </body>
</html>
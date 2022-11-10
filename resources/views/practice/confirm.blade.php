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
            <h1>お問い合わせ</h1>

            <nav>
                <a href="contact">お問合せページ</a>
                <a href="edit">編集ページ</a>
            </nav>

        </header>
        <h2>お問合せ履歴</h2>
        {{-- <form action = "/practice/confirm" method = "post"> --}}
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

            {{-- @foreach ($show_contents as $show_content) --}}
            {{-- @foreach ($results as $result) --}}
            @foreach ($contents as $content)
                <tr>
                    {{-- <td>{{$show_contents->id}}</td>
                    <td>{{$show_contents->name}}</td>
                    <td>{{$show_contents->hurigana}}</td>
                    <td>{{$show_contents->email}}</td>
                    <td>{{$show_contents->tel}}</td>
                    <td>{{$show_contents->message}}</td>
                    <td>{{$show_contents->contact}}</td> --}}

                    {{-- <td>{{$result->id}}</td>
                    <td>{{$result->name}}</td>
                    <td>{{$result->hurigana}}</td>
                    <td>{{$result->email}}</td>
                    <td>{{$result->tel}}</td>
                    <td>{{$result->message}}</td>
                    <td>{{$result->contact}}</td> --}}

                    <td>{{$content->id}}</td>
                    <td>{{$content->name}}</td>
                    <td>{{$content->hurigana}}</td>
                    <td>{{$content->email}}</td>
                    <td>{{$content->tel}}</td>
                    <td>{{$content->message}}</td>
                    <td>{{$content->contact}}</td>
                </tr>  
            @endforeach
        </table>
        <div>
            {{-- <a href="{{ route('practice.edit', $contents) }}">編集</a> --}}
        </div>
        {{-- </form> --}}
    </body>
</html>

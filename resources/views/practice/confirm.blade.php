<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <meta name="description" content="内容確認">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お問合せ履歴</title>
    </head>

    <body>
        <h2>お問合せ履歴</h2>
        <!-- <form action = "/practice/confirm" method = "post"> -->
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
        
            @foreach ($results as $result)
                <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->name}}</td>
                    <td>{{$result->hurigana}}</td>
                </tr>
            @endforeach
        </table>
        <!-- </form> -->
    </body>
</html>

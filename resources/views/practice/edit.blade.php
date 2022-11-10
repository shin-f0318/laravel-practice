<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>お問合せ内容編集</title>    
    </head>
    
    <body>
        <header>
            <nav>
                <div>                
                    <a href="contact">お問合せページ</a>
                    <a href="confirm">お問合せ内容確認ページ</a>
                </div>
            </nav>
        </header>

        <main>
            <article>
                <div>
                    <h1>お問合せ内容編集</h1>

                    <div>
                        <a href="confirm">戻る</a>
                    </div>

                    <form action="{{ route('practice.update') }}",$content method="post">
                        @csrf
                        @method('patch')
                        <div>
                            <label for="name">名前</label>
                            <input type="text" name="name" value="{{ $contents->name }}">
                        </div>
                        <div>
                            <label for="hurigana">フリガナ</label>
                            <input type="text" name="hurigana" value="{{ $contents->hurigana }}">
                        </div>
                        <div>
                            <label for="email">メールアドレス</label>
                            <input type="text" name="email" value="{{ $contents->email }}">
                        </div>
                        <div>
                            <label for="tel">電話番号</label>
                            <input type="text" name="tel" value={{ $contents->tel }}>
                        </div>
                        <div>
                            <label for="message">お問合せ内容</label>
                            <textarea name="message">{{ $contents->message }}</textarea>
                        </div>
                        <div>
                            <label for="contact">ご希望の連絡先</label>
                            <input type="radio" value="{{ $contents->contact }}" name="contact"><label>お電話</label>
                            <input type="radio" value="{{ $contents->contact }}" name="contact"><label>メール</label>
                            <input type="radio" value="{{ $contents->contact }}" name="contact"><label>どちらでも</label>
                        </div>
                        <button type="submit">更新</button>
                    </form>
                </div>
            </article>
        </main>
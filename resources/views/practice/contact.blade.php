<!DOCTYPE html>
<html>
    <head>
        <title>お問い合わせ</title>
        <meta charset="utf-8">
        <meta name="description" content="お問い合わせ先">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <h1>お問合せ</h1>

            <nav>
                <div>
                    <a href="index">一覧画面</a>
                </div>
            </nav>
        </header>
        
        <section>
        <form action="{{ route('practice.store') }}" method="post">
        @csrf
            <div>
                <div>
                    <label>名前</label>
                </div>
                <div>
                    <input type="text" name="name" placeholder="入力してください">
                </div>
            </div>

            <div>
                <div>
                <label>フリガナ</label>
                    <br>
                </div>
                <div>
                    <input type="text" name="hurigana" placeholder="入力してください">
                </div>
            </div>

            <div>
                <div>
                    <label>メールアドレス</label>
                    <br>
                </div>
                <div>
                    <input type="text" name="email" placeholder="入力してください">
                </div>
            </div>

            <div>
                <div>
                    <label>電話番号</label>
                    <br>
                </div>
                <div>
                    <input type="text" name="tel" placeholder="入力してください">
                </div>
            </div>

            <div>
                <div>
                  <label>お問い合わせ内容</label>
                  <br>
                </div>
                <div>
                  <textarea placeholder="入力してください" name="message"></textarea>

                </div>
            </div>

            <div>
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
                <input type="submit" value="送信">
            </div>
        </form>
        </section>

        <footer>
            <div>
                <a href="#">Introduction</a>
                <a href="#">Portfolio</a>
                <a href="contact">Contact</a> 
            </div>
        </footer>
    </body>

   
</html>
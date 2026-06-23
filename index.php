

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>プログラミング言語アンケート</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            padding: 40px;
        }
        .container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            width: 500px;
            box-shadow: 0 4px 15px rgba(255,105,135,0.2);
        }
        h1 {
            color: #ff6987;
            text-align: center;
            font-size: 22px;
        }
        label {
            color: #ff6987;
            font-weight: bold;
            display: block;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        .sub-label {
            color: #ffb3c6;
            font-size: 13px;
            margin-top: 5px;
            margin-bottom: 3px;
            display: block;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid #ffb3c6;
            border-radius: 10px;
            font-size: 14px;
            box-sizing: border-box;
            margin-bottom: 5px;
        }
        button {
            margin-top: 30px;
            width: 100%;
            padding: 12px;
            background-color: #ff6987;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff4d73;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>💻 プログラミング言語アンケート 💻</h1>
        <form action="save.php" method="post">

            <label>ニックネーム</label>
            <input type="text" name="nickname" placeholder="例：たろう" required>

            <label>好きなプログラミング言語</label>
            <select name="language">
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="TypeScript">TypeScript</option>
                <option value="PHP">PHP</option>
                <option value="Python">Python</option>
                <option value="Ruby">Ruby</option>
                <option value="Java">Java</option>
                <option value="Swift">Swift</option>
                <option value="Kotlin">Kotlin</option>
                <option value="Go">Go</option>
                <option value="Rust">Rust</option>
                <option value="C">C</option>
                <option value="C++">C++</option>
                <option value="C#">C#</option>
                <option value="その他">その他</option>
            </select>
            <span class="sub-label">その他の場合は自由に記述してください</span>
            <input type="text" name="language_free" placeholder="例：Elixirなど">
            <span class="sub-label">その理由を教えてください</span>
            <textarea name="language_reason" rows="2" placeholder="例：書きやすくて楽しい！"></textarea>

            <label>経験年数</label>
            <select name="experience">
                <option value="1年未満">1年未満</option>
                <option value="1〜3年">1〜3年</option>
                <option value="3〜5年">3〜5年</option>
                <option value="5年以上">5年以上</option>
            </select>

            <label>現在プログラミングを使っていますか？</label>
            <select name="using_now">
                <option value="仕事でメインで使っている">仕事でメインで使っている</option>
                <option value="仕事でたまに使っている">仕事でたまに使っている</option>
                <option value="趣味で使っている">趣味で使っている</option>
                <option value="ほとんど使っていない">ほとんど使っていない</option>
            </select>

            <label>一言コメント</label>
            <textarea name="comment" rows="4" placeholder="自由にどうぞ！"></textarea>

            <button type="submit">送信する 💌</button>
        </form>
    </div>
</body>
</html>
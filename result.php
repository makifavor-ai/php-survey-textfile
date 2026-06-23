
<?php
$lines = file('data.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>アンケート結果</title>
    <style>
        body {
            background-color: #fff0f5;
            font-family: 'Arial', sans-serif;
            padding: 40px;
        }
        h1 {
            color: #ff6987;
            text-align: center;
        }
        .card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            margin: 20px auto;
            max-width: 600px;
            box-shadow: 0 4px 15px rgba(255,105,135,0.2);
        }
        .item {
            margin-bottom: 10px;
            border-bottom: 1px solid #ffb3c6;
            padding-bottom: 10px;
        }
        .label {
            color: #ff6987;
            font-weight: bold;
            font-size: 13px;
        }
        .value {
            color: #333;
            font-size: 15px;
        }
        .back-btn {
            display: block;
            text-align: center;
            margin: 30px auto;
            padding: 12px 30px;
            background-color: #ff6987;
            color: white;
            border-radius: 10px;
            text-decoration: none;
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>💻 アンケート結果 💻</h1>
    <a href="index.php" class="back-btn">アンケートに戻る</a>

    <?php foreach ($lines as $line): ?>
    <?php $cols = explode(',', $line); ?>
    <div class="card">
        <div class="item">
            <div class="label">ニックネーム</div>
            <div class="value"><?= $cols[0] ?></div>
        </div>
        <div class="item">
            <div class="label">好きな言語</div>
            <div class="value"><?= $cols[1] ?>
                <?= $cols[2] ? '（' . $cols[2] . '）' : '' ?>
            </div>
            <div class="value">💬 <?= $cols[3] ?></div>
        </div>
        <div class="item">
            <div class="label">経験年数</div>
            <div class="value"><?= $cols[4] ?></div>
        </div>
        <div class="item">
            <div class="label">現在の使用状況</div>
            <div class="value"><?= $cols[5] ?></div>
        </div>
        <div class="item">
            <div class="label">一言コメント</div>
            <div class="value"><?= $cols[6] ?></div>
        </div>
    </div>
    <?php endforeach; ?>

</body>
</html>


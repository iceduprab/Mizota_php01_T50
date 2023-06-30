<html>

<head>
    <meta charset="utf-8">
    <style>
        .menu {
            background-color: #2FA6E9;
        }
    </style>
</head>

<body>
    <div class="menu">
        <h3>menu</h3>
        <ul>
            <li>組み込み関数を知る</li>
            <li>if文と文と関数を組み合わせておみくじを作る</li>
            <li>(演習)自由におみくじをアレンジする</li>
            <li><a href="index.php">index.php</a></li>
        </ul>
    </div>
    <!-- ここから -->

    <?php

    // $today = date('Y/m/d H:i:s');
    // echo $today;

    $string = 'あいうえお';
    $length = strlen($string);
    echo $string . 'の文字の長さ' . $length . 'です';    

    $rand = rand(1, 3);
    echo '<br><br>'; 
    // echo '<br>' . $rand;
    if ($rand === 1) {
        echo '大吉';
    } else {
        echo '凶';
    }


    ?>

    <!-- ここまで -->
</body>

</html>

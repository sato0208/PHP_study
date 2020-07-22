<!doctype html>
<html lang="ja">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
$zip = '987-6543';
$zip = mb_convert_kana($zip,'a', 'UTF-8');
// preg_match正規表現でマッチするかどうか検証するファンクション、郵便番号かどうかを検証する
if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)){
    print('郵便番号:〒' . $zip);
  } else{
    print('郵便番号を123-4567の形式でご入力ください');
  }
?>
</pre>
</main>
</body>
</html>
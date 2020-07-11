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
// タイムゾーンを東京標準に設定する
// date_default_timezone_set('Asia/Tokyo');
// print (time());

// 文字列で指定したものをタイムスタンプに変換する
// strtotime('1543/1/31')
// strtotime('+2day')

// 今日の日付から＋2日する
print (date('n/j(D)', strtotime('+2day')));
?>
</pre>
</main>
</body>
</html>
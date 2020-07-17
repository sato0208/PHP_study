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
// ドキュメントルートを用いてファイルに書き込まれている情報を書き出す
// $news = file_get_contents('../../news_data/news.text');
//   print ($news)
// 読み込んだデータを再加工しない場合はreadfileを使用する
readfile('../../news_data/news.text');

?>
</pre>
</main>
</body>
</html>
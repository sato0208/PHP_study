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
// ドキュメントルートを用いて情報をファイルに保存する
$success = file_put_contents('../../news_data/news.text', '2020-7-17 ホームページをリニューアルしました');
if ($success){
  print('プリントへの書き込みが完了しました');
} else{
  print('ファイルへの書き込みが失敗しました。フォルダの権限などを確認してください');
}
?>
</pre>
</main>
</body>
</html>
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
// sprintf で日付が一桁の場合は09日のように表示させるよう書式を整える
$date = sprintf('%04d年 %02d月 %02d日 %s', 2020, 1, 12, '金');
print($date);
?>
</pre>
</main>
</body>    
</html>
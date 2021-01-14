<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>4eachblog 掲示板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=goto;host=localhost;","root","root");
$stmt = $pdo->query("select * from 4each_keijiban");

?>
	<header>
		<div class="headline">
			<img src="4eachblog_logo.jpg">
		</div>
	</header>
	<nav>
		<ul class="nav-list">
			<li class="nav-list-item">トップ</li>
			<li class="nav-list-item">プロフィール</li>
			<li class="nav-list-item">4eachについて</li>
			<li class="nav-list-item">登録フォーム</li>
			<li class="nav-list-item">問い合わせ</li>
			<li class="nav-list-item">その他</li>
		</ul>
	</nav>
	<main>
		<div class="left">
			<h1 class="title">プログラミングに役立つ掲示板</h1>
	<form method="post" action="insert.php">
		<div>
			<h2>入力フォーム</h2>
			<label>ハンドルネーム</label>
			<br>
			<input type="text" class="text" size="35" name="handlename">
		</div>

		<div>
			<label>タイトル</label>
			<br>
			<input type="text" class="text" size="35" name="title">
		</div>
	<div>
		<label>コメント</label>
		<br>
		<textarea cols="35" rows="7" name="comments"></textarea>
	</div>

	<div>
		<input type="submit" class="submit" value="投稿">
	</div>
</form>


<?php

while($row = $stmt->fetch()) {
	echo "<div class='kiji'>";
	echo "<h3>".$row['title']."</h3>";
	echo "<div class='contents'>";
	echo $row['comments'];
	echo "<div class='handlename'>posted by".$row['handlename']."</div>";
	echo "</div>";
	echo "</div>";

}

?>
</div>
			<div class="sidebar">
				<ul>人気の記事</ul>
				 <li>PHPオススメ本</li>
				 <li>PHP MyAdminの使い方</li>
				 <li>今人気のエディタ Top5</li>
				 <li>HTMLの基礎</li>
				<ul>オススメリンク</ul>
				 <li>インターノウス株式会社</li>
				 <li>XAMPPのダウンロード</li>
				 <li>Eclipseのダウンロード</li>
				 <li>Bracketsのダウンロード</li>
				<ul>カテゴリ</ul>
				 <li>HTML</li>
				 <li>PHP</li>
				 <li>MySQL</li>
				 <li>JavaScript</li>
		</div>
	</main>
	 <footer>copyright ©️ internous ｜ 4each blog the which provides A to Z about programming</footer>
</body>
</html>
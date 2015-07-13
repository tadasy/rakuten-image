<!DOCTYPE html>
<?php

require __DIR__ . '/vendor/autoload.php';

$title = isset($_GET['title']) ? $_GET['title'] : null;
$author = isset($_GET['author']) ? $_GET['author'] : null;

$client = new RakutenRws_Client();
// アプリID (デベロッパーID) をセットします
$client->setApplicationId(getenv('RAKUTEN_APPLICATION_ID'));
 
// アフィリエイトID をセットします(任意)
$client->setAffiliateId(getenv('RAKUTEN_AFFILIATE_ID'));
 
// IchibaItem/Search API から、keyword=うどん を検索します
$options = [];
$options['booksGenreId'] = '001001';
$options['title'] = $title;
$options['author'] = $author;

$response = $client->execute('BooksBookSearch', $options);
 
// レスポンスが正しいかを isOk() で確認することができます
if (!$response->isOk()) {
    echo 'Error:'.$response->getMessage();
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>楽天の画像検索</title>
<style>
table {border: solid 1px #000000; border-collapse: collapse;}
td,th {border: solid 1px #000000}
</style>
</head>
<body>
<h1><?php echo htmlspecialchars($title) ?></h1>
<?php if ($response['count'] > 0): ?>
<ol>
<?php foreach ($response as $row): ?>
<li><img src="<?php echo $row['largeImageUrl']?>"></li>
<?php endforeach; ?>
</ol>
<?php else: ?>
画像なし
<?php endif; ?>
</body>
</html>

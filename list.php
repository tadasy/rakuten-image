<!DOCTYPE html>
<?php

$imageFile = __DIR__ . '/images.tsv';

if (($handle = fopen($imageFile, "r")) === false) {
    throw new Exception('file open failed.');
}

$list = [];
while (($row = fgetcsv($handle, 0, "\t")) !== false) {
    $record = [];
    $record['json_file'] = $row[0];
    $record['title'] = $row[1];
    $record['author'] = $row[2];
    $record['image_url'] = $row[3];
    $list[] = $record;
}
?>
<html>
<head>
<title>楽天の画像</title>
<style>
table {border: solid 1px #000000; border-collapse: collapse;}
td,th {border: solid 1px #000000}
</style>
</head>
<body>
<table>
<tr>
<th>no</th>
<th>タイトル</th>
<th>作者</th>
<th>jsonファイル</th>
<th>画像</th>
</tr>
<?php foreach ($list as $i => $row): ?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row['title'] ?></td>
<td><?php echo $row['author'] ?></td>
<td><?php echo $row['json_file'] ?></td>
<td>
<?php if (empty($row['image_url'])): ?>
画像なし <a href="">検索</a>
<?php else: ?>
<img src="<?php echo $row['image_url'] ?>">
<?php endif; ?>
</td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>

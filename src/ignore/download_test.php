<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../css/all.css" type="text/css">
  <title></title>
</head>
<body>
  <!-- <a href="../../img/goshuin/001zenkou.jpg" download="aaa.jpg">ダウンロード</a> -->

<?php
  $image_array=["865toudai","860koufuku","864toushoudai","823enryaku","379kongoubu","411chion","199shoujoukou","233kuon","438myoushin","285eihei","460manfuku","000"];
  $pathAry = array();
  foreach($image_array as $image){
    if($image!="000"){
      $pathAry[] = $img_path="../../img/goshuin/".$image.".jpg";
    }
  }

  // zipのインスタンス作成
  $objzip = new zipArchive($pathAry);

  // 一時ファイル（zip）の名前とPath
  $zipName = "総本山".'.zip';
  $zipPath = 'zip/' . $zipName;

  // 一時ファイル（zipファイル）を作成
  $result = $objzip->open($zipPath, ZIPARCHIVE::CREATE | ZIPARCHIVE::OVERWRITE);
  if ($result !== true) {
    echo "err - open zip-file";
    exit;
  }
  set_time_limit(0);

  // zipに追加
  foreach ($pathAry as $filepath) {
    $filename = basename($filepath);
    $objzip->addFromString($filename, file_get_contents($filepath));
  }
  $objzip->close();

  // 出力（ダウンロード）
  // header('Content-Type: application/zip; name="' . $zipName . '"');
  // header('Content-Disposition: attachment; filename="' . $zipName . '"');
  // header('Content-Length: '.filesize($zipPath));
  // echo file_get_contents($zipPath);
?>
  <a href="<?php echo($zipPath) ?>" download="総本山.zip">ダウンロード</a>


<?php

  // 一時ファイル（zipファイル）の削除
  // unlink($zipPath);
  // exit();

?>

</body>
</html>

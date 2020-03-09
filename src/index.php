<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php
  $img_path="../img/";
  $description="御朱印まとめ=>全国一宮,二宮,三宮,奉幣二十二社,官国幣社,別表神社,各宗派本山,各信仰総本社,世界遺産,坂東三十三箇所,西国三十三箇所,東京五社,
  東京十社,南都七大寺,鎌倉五山,京都五山,東国三社,西国三社,出羽三山,上毛三山,秩父三山,日本三大稲荷,日本三大八幡,日本三大天神,日本三大住吉,日本三大熊野,日本三大弁天,天下三戒壇,
  日本三大仏,日本三大観音,日本三大聖天,日本三大不動,天台宗十大宗派総本山,天台宗四大本山,天台宗五大門跡寺院,真言宗十八本山,真言宗智山派大本山,浄土宗七大本山,浄土真宗五大本山,
  日蓮宗七大本山,臨済宗九大本山,曹洞宗三本山,建武中興十五社,全国東照宮,全国護國神社,全国総社,全国国分寺,鎌倉四寺,四寺廻廊,三英傑,四大東照宮,尾張五社,茨城十二社,浅草七福神,
  日本七大稲荷,関東三大稲荷,東京三大稲荷,東海三大稲荷,関東三大天神,江戸三大天神,関東三大不動,関東厄除け三不動,関東三大師,関東厄除け三大師,五色不動,准勅祭十二社,平将門北斗七星,
  江戸三名桜,江戸三大相撲,成田山八別院,三長三本,日蓮四大法難,江戸六塔";
  $title="双馬の御朱印日記【トップ】";
  $keyword="双馬の御朱印日記,御朱印,寺社,神社,寺院,全国一宮,別表神社,官国幣社";
?>
<head>
  <meta charset="utf-8">
  <title> <?php echo $title ?> </title>
  <meta name="author" content="shumaikun">
  <meta name="keywords" content="<?php echo $keyword ?>">
  <meta name="description" content="<?php echo $description ?>">
  <meta property="og:image" content="<?php echo $img_path ?>__tsurugi.jpg">
  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:description" content="<?php echo $description ?>">
  <meta name="twitter:image" content="<?php echo $img_path ?>__tsurugi.jpg">
  <meta name="twitter:title" content="<?php echo $title ?>">
  <meta name="twitter:description" content="<?php echo $description ?>">
  <link rel="shortcut icon" href="<?php echo $img_path ?>icon.ico">
  <link rel="stylesheet" href="../css/all.css" type="text/css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script> -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="../js/top.js" ></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script src="../js/pagetop.js"></script>

</head>
<body background="<?php echo $img_path ?>background.jpg">
<?php
  // 共通部分のヘッダーのhtmlファイルを読み込む
  $fp=fopen("header.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>
  <div class="hide">
    <img src="<?php echo $img_path ?>background.jpg" alt="">
  </div>
  <!-- <div class="slide">
    <ul class="bxslider"> -->
  <div class="hero">
    <div id="photo">
<?php
    $moving_image=["__tsurugi","__heian","__amaharashi","__kennin","__iwashimizu"];
    foreach ($moving_image as $a) {
?>
      <!-- <li> -->
      <img src="<?php echo $img_path.$a ?>.jpg" alt="">
      <!-- </li> -->
<?php
    }
?>
    </div>
  </div>
    <!-- </ul>
  </div> -->


      <div class="content">
    <?php
      require('top_data.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
      foreach($all_group as $name => $arr){
        $size=sizeof($arr);
        $got_num=0;  //収集数を求める(画像ファイル名が000じゃないもの和)
        if(!empty($arr)){ foreach($arr as $a){ if(preg_match('/\d\d\d\w+/',$a[0])){ $got_num+=1; }}}
    ?>
        <div class="space-on-h2"></div>
        <h2 >
          <?php echo $name ?>
          <div class="title_right">収集率 <?php echo $got_num."/".$size ?></div>
        </h2>
        <div class="space-on-h2"></div>

    <?php
        if(!empty($arr)){
          #区切る要素数を決める（優先度順）
          if($size%5==0){
            $num=5;
          }elseif($size%4==0){
            $num=4;
          }elseif($size==3 or $size==6){
            $num=3;
          }elseif($size==2){
            $num=2;
          }elseif($size%5==4){
            $num=5;
          }elseif($size%4==3){
            $num=4;
          }else{
            $num=5;
          }
          $div=array_chunk($arr,$num);
          foreach($div as $a){
            foreach($a as $b){  //御朱印の画像
    ?>
              <div class="card1">
                <a href="<?php echo $merge_image_file=$img_path.(preg_match('/\d\d\d\w+/',$b[0]) ? $b[0] : "000").".jpg"; ?>" target="_blank">
                  <image class="image1" src="<?php echo $merge_image_file ?>"/>
                </a>
                <p class="title1"><?php echo preg_match('/<br>/',$b[1]) ? preg_split('/<br>/',$b[1])[1] : $b[1] ?></p>
                <p class="content1"><?php echo preg_match('/<br>/',$b[1]) ? preg_split('/<br>/',$b[1])[0] : "" ?></p>
              </div>
    <?php
            }
          }
        }
      }
    ?>
      </div>



<?php
  $fp=fopen("footer.html","r");
  while(!feof($fp)){echo fgets($fp);}
?>



</body>
</html>

<?php
  // ●ローカルでの実行コマンド
  // php -S 127.0.0.1:8080
  // ●ローカルでのURL
  // http://localhost:8080/src/index.php
  // ●リモートでのURL
  // http://cgi.u.tsukuba.ac.jp/~s1711520/goshuin/src/index.php
?>

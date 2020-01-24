<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta charset="utf-8">
    <title> 双馬の御朱印日記【メンバー】 </title>
    <link rel="stylesheet" href="../css/all.css" type="text/css">
  </head>
  <body background="../image/test.jpg">
    <header class="site-header">
    	<h1 class="site-logo">双馬の御朱印日記</h1>
    	<nav class="gnav">
    		<ul class="gnav__menu">
    			<li class="gnav__menu__item"><a href="matome.php">トップ</a></li>
    			<li class="gnav__menu__item"><a href="">活動</a></li>
    			<li class="gnav__menu__item"><a href="member.php">メンバー</a></li>
    			<li class="gnav__menu__item"><a href="">更新情報</a></li>
    			<li class="gnav__menu__item"><a href="">Twitter</a></li>
    		</ul>
    	</nav>
  	</header>
    <div class="hide">
      <img src="../image/test.jpg" alt="">
    </div>
    <div class="hero">
    </div>
    <div class="content">

      <h2> しゅーまいくん (Webサイト制作者)</h2>
      <table class="prof">

<?php
        require('member_hash.php');  //それぞれの表のデータ(JSON)は、別ファイルに記述
        foreach($all_trip as $arr){
?>
        <tr>
          <td class="month"> <?php echo $arr[0] ?> </td>
          <td> <?php echo $arr[1] ?>旅行
<?php
          if(!empty($arr[2])){
?>
            <ul  class="cp_list" style="font-size:75%;">
            <!-- <ul> -->
<?php
            foreach($arr[2] as $a){
?>
              <li class="place"><?php echo $a ?></li>
<?php
            }
?>
            </ul>
<?php
          }
?>
          </td>
        </tr>
<?php
      }
?>
      </table>

      <h2> VAVA-BOON (御朱印提供協力)</h2>
      <p> 三度の飯より御朱印好き！ </p>

      <h2> DAIKING </h2>
      <p> 酒は百薬の長 </p>

      <h2> アサカァァァ </h2>
      <p> アサクサァァァ </p>

	  </div>
    <footer class="site-footer">
		  <p class="copyright">&#169;2019 Shumaikun</p>
	  </footer>
  </body>
</html>

<!--http://cgi.u.tsukuba.ac.jp/‾s1711520/goshuin/src/member.php

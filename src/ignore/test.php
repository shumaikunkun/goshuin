<style type="text/css">
  img.mini{
    width:33px;

  }
</style>

<?php

$goshuin_img_path="../../img/goshuin/";

foreach(glob($goshuin_img_path."*.jpg") as $filename){
?>
<img src="<?php echo $filename ?>" class="mini" alt="画像">
<?php
}

?>

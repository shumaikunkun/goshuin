<style type="text/css">
  img.mini{
    width:33px;

  }
</style>

<?php

$img_path="../../img/";

foreach(glob($img_path."*.jpg") as $filename){
?>
<img src="<?php echo $filename ?>" class="mini" alt="画像">
<?php
}

?>

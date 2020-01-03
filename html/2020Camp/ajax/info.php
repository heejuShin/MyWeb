<?php
  $kind = $_GET['kind'];
  if($kind==1)
    $str = "Hello!!!";
  else if($kind==2)
    $str = "안녕하세요!!!";
 ?>

<h1 style="color:red"><?=$str?></h1>

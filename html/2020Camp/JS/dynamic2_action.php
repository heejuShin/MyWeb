<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<h3>I got your information</h3>

<?php

$count=$_POST['count'];
for($i=0; $i<$count; $i++){
  echo ($i+1)."번째 데이터입니다.<br>";
  $itemname[$i]=$_POST['itemname'.$i];
  $quantity[$i]=$_POST['quantity'.$i];
  $unit[$i]=$_POST['unit'.$i];

  echo "[1] itemname: ".$itemname[$i]."<br>";
  echo "[2] quantity: ".$quantity[$i]."<br>";
  echo "[3] unit: ".$unit[$i]."<br>"."<br>";
}
?>
<br><br>
<a href="./dynamic2.php">Go Back</a>
</html>

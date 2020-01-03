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

/*
$company = $_POST['company'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$title = $_POST['title'];
$phone = $_POST['phone'];
$cr = $_POST['cr'];
$session = $_POST['session'];
$job = $_POST['job'];
$dr = $_POST['dr'];
$expectations = $_POST['expectations'];

echo "Company: ".$company."<br>";
echo "First name: ".$firstname."<br>";
echo "Second name: ".$secondname."<br>";
echo "Email Address: ".$email."<br>";
echo "Title: ".$title."<br>";
echo "Phone: ".$phone."<br>";
if(!strcmp($cr,"on"))
  echo "You checked 'cancel registeration'<br>";
else {
  echo "You didn't check 'cancel registeration'<br>";
}

echo "252 Training Session 2010 : ";
if(!strcmp($session,"s1"))
  echo "[S1] 2010.03.12<br>";
else if(!strcmp($session,"s2"))
  echo "[S2] 2010.05.10<br>";
else if(!strcmp($session,"s2"))
  echo "[S3] 2010.09.30<br>";

echo "Job Function: ";
echo $cr;
if(!strcmp($job,"o1"))
  echo "Campaign Management<br>";
else if(!strcmp($job,"o2"))
  echo "CRM Administration<br>";
else if(!strcmp($job,"o3"))
  echo "Email Deployment<br>";
else if(!strcmp($job,"o4"))
  echo "Partner<br>";
else if(!strcmp($job,"o5"))
  echo "Employee<br>";
else {
  echo "<br>";
}

if(!strcmp($dr, ""))
  echo "No Diecary Registeration<br>";
else
  echo "Diecary Registeration: ".$dr."<br>";
if(!strcmp(trim($expectations), ""))
  echo "No Expectations<br>";
else
  echo "Expectations: ".$expectations."<br>";
*/
?>
<br><br>
<a href="./dynamic2.php">Go Back</a>
</html>

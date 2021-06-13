

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>

<style>

h1
{
text-align:center;
}


.container{



border:2px solid blue;

border-radius: 20px;
}

</style>
</head>
<body>

<header>

<h1>
EMPLOYEES GENERATED RESULT...


</h1>


</header>
<center>
<div class="container">
<br>
<br>


<?php

if (isset($_POST['submit'])) {

$name       = $_FILES['photo']['name'];

$temp_name  = $_FILES['photo']['tmp_name'];

if (isset($name) and !empty($name)) {

$location = './uploads/';

if (move_uploaded_file($temp_name, $location . $name)) {
	
echo '<h1>File uploaded successfully</h1>';
} else
echo "error";
} else {
echo 'You should select a file to upload !!';
}



echo "<br><img src=\"" . $location . $name . "\" width=\"200px\">";

echo "<br><br>firstname : " . $_POST['fname'];
echo "<br><br>secondname : " . $_POST['sname'];
echo  "<br><br>employee no:" . $_POST['eno'];

echo "<br><br>Employee designation : " . $_POST['designation'];
echo "<br><br>Fathers name : " . $_POST['father'];

echo "<br><br>address : " . $_POST['address'];
echo "<br><br> Contact Number : " . $_POST['contact'];

echo "<br><br>Employee Gender : " . $_POST['gender'];
echo "<br><br>date of birth : " . $_POST['dob'];

echo "<br><br>Emp Category : " . $_POST['catos'];
$basic = 0;
if ($_POST['catos'] == "parttime")
echo "<br><br>Employee No. of hours : " . $_POST['hours'];
else {
echo "<br><br> Basic salary is: " . $_POST['salary'];
$basic = $_POST['salary'];
}
$da = 0;
$hra = 0;
$net = 0;
$pf = 0;
$tax = 0;
$gross = 0;
if ($_POST['catos'] == "parttime") {
echo "<br><br> Salary : Rs. " . $_POST['hours'] * 100;
} else {
if ($_POST['catos'] == "fulltime") {
if ($basic < 10000) {
$da = 0.45 * $basic;
$hra = 0.1 * $basic;
$pf = 0;
$tax = 0;
} else if ($basic >= 10000 && $basic < 5000) {
$da = 0.75 * $basic;
$hra = 0.2 * $basic;
$pf = 1200;
$tax = 0.5 * $basic;
} else {
$da = 0.90 * $basic;
$hra = 0.3 * $basic;
$pf = 0.05 * $basic;
$tax = 0.15 * $basic;
}
} else {
if ($basic < 5000) {
$da = 200;
$hra = 0;
$pf = 0;
$tax = 0;
} else if ($basic >= 5000 && $basic <= 25000) {
$da = 0.15 * $basic;
$hra = 1000;
$pf = 0;
$tax = 0.03 * $basic;
} else {
$da = 0.20 * $basic;
$hra = 0.05 * $basic;
$pf = 0.05 * $basic;
$tax = 0.09 * $basic;
}
}
echo "<br><br>DA : " . $da;
echo "<br><br>HRA : " . $hra;
echo "<br><br>PF : " . $pf;
echo "<br><br>Tax : " . $tax;
$gross = $basic + $hra + $da;
$net = $gross - $pf - $tax;
echo "<br><br>Gross Pay : " . $gross;
echo "<br><br>Net Pay : " . $net;
}
}

?>

</div>

<button><a href="php9.php">GO BACK</a></button>
</center>



</body>
</html>



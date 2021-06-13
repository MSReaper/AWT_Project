
<?php

  $fact = 1;

  if(isset($_POST['submit']))
{
     $num = $_POST['number'];

     for ($i = 1; $i <= $num; $i++){ 

        $fact = $fact * $i;  

        }  
        
}  

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>factorial of number:</title>
<style>

body{


background-color: grey;
}


.body{



background-color:lightgrey;

border: 1px solid black;

border-radius:15px;

padding:20px;


}



</style>
</head>
<body>

<header>

<h1>FACTORIAL CALCULATION.....</h1>

</header>

<div class="body">
<br>
<br>


<form action="" method="post">

<label for="">Enter the factoriasl Number:</label>

<input type="number" name="number" id="number" placeholder="enter the number:">

<br>

<input type="submit" name="submit">


<p><?php echo "the factorial of the number: " . $fact ." "; ?> </p>

</form>


</div>

</body>
</html>
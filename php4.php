
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong nummber.</title>
</head>
<body>

   

<?php
 $num=407;  

$total=0;  

$x=$num;  

while($x!=0)  

{  

$rem=$x%10;  

$total=$total+$rem*$rem*$rem; 

$x=$x/10;  

}  
if($num==$total)  
{  
echo "Yes $num is an Armstrong number";  
}  
else  
{  
echo "No $num is not an armstrong number";  
}  




?>
    

</body>
</html>



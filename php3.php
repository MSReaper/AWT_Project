
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Operations:</title>
</head>
<body>
<?php  


function palindrome($n){  

$number = $n;  

$sum = 0;  

while(floor($number)) {

$rem = $number % 10; 

$sum = $sum * 10 + $rem;  



$number = $number/10;  

}  

   return $sum;  

}  

$input = 1235321;  

$num = palindrome($input);  


if($input==$num){  

echo "$input is a Palindrome number\n";  

} else {  

echo "$input is not a Palindrome\n";  
}  


   function reverse($number)
   {

    $num = (string) $number;  
    /* Reverse the string. */  
    $revstr = strrev($num);  
    /* writes string into int. */  
    $reverse = (int) $revstr;   
     return $reverse;  
   }

     echo "the reverse of  the number is" . reverse(1235321);

     function sum(){


        
     }
?>  


</body>
</html>





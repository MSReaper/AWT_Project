<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        
    p{

        color:white;
        font-size:90px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);  


    }
    
    
    </style>
</head>
<body>
        
<header>

<center>
        
     Display clock time.        
         
</center>


</header>

<p>

<?php
    
    $t = date(" h: i : s A ");

    echo($t);


    
?>
</p>
</body>
</html>
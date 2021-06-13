
<?php

 if(isset($_POST['submit'])){

     $str = $_POST['string'];

     $result;

     switch($_POST['options']){

        case "1":
            $result = strrev($str);
            break;

        case "2":
            $result = strlen($str);
             break;

       case "3":
        $result = substr($str,2);
        break;  
        
        case "4":
             
            $result = strtoupper($str);
            break;
        case "5":
            $result = strtolower($str);
            break;  
        case "6":
            
            $result = str_word_count($str);
            break;  
  
     }
     
 }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARIThmetic functions</title>

    <style>

    body{

          background-color:lightblue;
    }

    h1{
        text-align:center;
    }
      .container{

               background-color: lightgrey;
               border: 3px dotted black;
               border-radius:15px;
               margin-left:500px;
               margin-right:500px;

      }
       .align{

                padding:80px;
       }
    </style>
</head>
<body>

<header>

<h1>  ARITHMETIC FUNCTIONS........
</h1>


</header>

<div class="container">
<div class="align">

<form action="<?php echo $_SERVER['PHP_SELF'];  ?>" method="post">

   <label for="string"> enter your string:</label>

   <input type="text" placeholder="enter your String:" value="<?php if(isset($_POST['submit'])) echo $_POST['string'];   ?>" name="string">
   <br>
   <br>

   <label for="">select String functiom:</label>
   <select name="options">
   <option value="1">Reverse the string</option>
   <option value="2">find the length</option>
   <option value="3">substring operation</option>
   <option value="4">Convbert to upper</option>
   <option value="5">Convert to lower</option>
   <option value="6">Count the no of words</option>
   
   </select>
   <br>
   <br>

   <label for="">Result is:</label>

  <input type="text" name="result" placeholder=""  value="<?php if(isset($_POST['submit'])) echo $result; ?>">

  <br>
  <br>

  <input type="submit" value="submit" name="submit">

  <input type="reset" value="reset">

  </form>
</div>
</div>
    
</body>
</html>
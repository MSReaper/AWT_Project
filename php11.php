<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITEMS Blog</title>

    <style>
    
      .header{

               border:1px solid black;

               border-radius:20px;    
           
      }
      .body{

               background-color:lightgreen;
               border:1px solid green;
               border-radius: 18px;
               padding-left:500px;
      }
      center{

                 margin-right:800px;
      }
    
    
    </style>
</head>
<body>
    
    <header>
    
         <div class="header">
         
         <h1> Welcome to the Item Store.</h1>
         
         
         </div>
    
    </header>

       <div class="body">
       
      <center>  <h3>ITEM STORE:</h3></center>

      <form action="item.php" method="post">
       
       <label for="">ENTER THE ITEMS NAME:</label>
       <input type="text" name="items" >
       <br>
       <br>

       <label for="">ENTER THE ITEMS PRICE:</label>

       <input type="text" name="prices">

       <br>
       <input type="submit" name="submit" value="store">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

       <input type="reset" value="reset">

     </form>

       </div>
</body>
</html>
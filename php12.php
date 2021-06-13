<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shopping Mart</title>

<style>
.header{


background-color:darkgrey;
color:black;

}
body{


background-color: orange;
}

.bill{

border:2px solid red;
margin-left:450px;
margin-right:450px;
background-color:lightyellow;
border-radius:14px;
}

</style>
</head>
<body>

<header>
<div class="header">
<center>   <h1>WELCOME TO SUPER MARKET</h1> </center>

</div>


</header>

<div class="body">
<h1>Shop your Item:</h1>

<form action="bill.php" method="post">

<label for="options">SELECT THE ITEM:</label>

<select name="item" id="item" onchange="dropitem();">
<option value="1" name="1" id="pencil">pencil</option>
<option value="2" name="2" id="2">mobile</option>
<option value="3"  name="3" id="3">umbrella</option>
<option value="4" name="4" id="4">shoes</option>
<option value="5" name="5" id="5">jacket</option>

</select>

<div class="bill">

<table>

<tr>
<th> Description</th>
<th>Values</th>

</tr>

<tr>
<td>SLno: of item:</td>

<td><input type="number" name="number"  value="" id="num"></td>

</tr>

<tr>
<td>item name</td>

<td><input type="text" name="name"  value="" id="nam" ></td>

</tr>


<tr>
<td>item price</td>

<td><input type="number" name="price" value="" id="pric" ></td>

</tr>


<tr>
<td>item code</td>

<td><input type="number" name="code"   value="" id="cod" ></td>

</tr>


<tr>
<td> select quantity:</td>

<td><input type="number" name="quantity" id="quantity"></td>

</tr>

</table>

<input type="submit" name="submit" value="bill">
</div>
</form>  
</div>

<script>

  item = document.getElementById('item');
  num = document.getElementById('num');
  price = document.getElementById('pric');
  name = document.getElementById('nam');
  code = document.getElementById('cod');

   function dropitem(){
   
     var category = item.options[item.selectedIndex].text;

     if(category == 'pencil')
     {
          
          num.value = 1;
           document.getElementById('nam').value = "pencil";
          price.value = 12;
          code.value = 101; 
     }
    else if(category == 'mobile')
    {
         num.value = 2;
         document.getElementById('nam').value = "mobile";
          price.value = 13000;
          code.value = 102; 

    }
    else if(category == 'umbrella')
    {
        num.value = 3;
        document.getElementById('nam').value = "umbrella";
          price.value = 700;
          code.value = 103; 

    }
    else if(category == 'shoes')
    {
        num.value = 4;
        document.getElementById('nam').value = "shoes";
          price.value = 3000;
          code.value = 104; 

    }
    else
    {
        num.value = 5;
        document.getElementById('nam').value = "jacket";
          price.value = 4000;
          code.value = 105; 

    }


   }

</script>

</body>
</html>
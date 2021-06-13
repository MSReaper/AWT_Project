<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>billing </title>

    <style>
    body{
    
            background-color: lightblue;
    }
     table,
        td,
        th {
            border: black 2px solid;
        }

        .body{

            background-color:lightpink;
            border:2px dotted red;
            border-radius:20px;
            margin-left:700px;
            margin-right:650px;
        }
    
    </style>
</head>
<body>
<hr>

     

     <h1>SHOPPING Bill...........</h1>
     <hr>
     <div class="body">

     <h3>your bill has been generated!</h3>

     <table>
        <th colspan="5">Bill</th>
        <tr>
            <td>Sl. No.</td>
            <td>Item Name</td>
          
            <td>Item Price</td>
            <td>Item Code</td>
            <td>Item Quantity</td>
        </tr>
        <tr>
            <td><?php echo $_POST['number']; ?></td>
            <td><?php echo $_POST['name']; ?></td>
            <td><?php echo $_POST['price']; ?></td>
            <td><?php echo $_POST['code']; ?></td>
           
            <td><?php echo $_POST['quantity']; ?></td>

        </tr>
        <tr>
            <td colspan="5" style="text-align: center;">Total : Rs. <?php echo $_POST['price'] * $_POST['quantity']; ?></td>
        </tr>
    </table>
    </div>
    <hr>

            <button><a href="php12.php">GO BACK</a></button>
</body>
</html>
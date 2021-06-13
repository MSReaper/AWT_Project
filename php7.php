<?php

  
		$result_str = $result = '';
if (isset($_POST['submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of units consumed--' . $units . '<br />the total current bill is: - ' . $result;
    }
}
/**
 * To calculate electricity bill as per unit cost
 */
function calculate_bill($units) {
    $unit_cost_first = 3.00;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.00;
    $unit_cost_fourth = 6.00;

    if($units < 100) {
        $bill = $units * $unit_cost_first;
    }
    else if($units >= 100 && $units <= 200) {
         $bill = $units * $unit_cost_second;
    }
    else if($units >= 200 && $units <= 300) {
       
	     $bill = $units * $unit_cost_third;
    }
    else {
          $bill = $units * $unit_cost_fourth;
    }
    return number_format((float)$bill, 2, '.', '');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing System </title>

    <style>
             body{

                    background-color: lightyellow;
             }
    
    
    
    </style>
</head>
<body>

       <header>
                  <center>
                             <h1>Electricty Billing system</h1>
                  
                  
                  
                  </center>
       
       
       
       </header>
	   <hr>
    
          <form action="<?php echo $_SERVER['PHP_SELF'];  ?>"   method="post">

          <div class="form" style="margin-left: 40px;">
          
          <label for="prevunit"> Enter  Previous Unit:
          <input type="number" name="unitss" value="" required>
          
          </label>
          <br>
          <br>
          <br>



          <label for="units"> Enter Current Unit:
          <input type="number" name="units" value="" required>
          
          </label>
		  
		  <br>
		  
		  <br>
		  
		  <br>
		  
		  <input type="submit" name="submit" value="Calculate">
		  <input type="reset" name="" value="Reset">
          
          </div>
          

          </form>
		  
		  <div>
		  
		      <?php echo '<br />' . $result_str; ?>
		  
		  </div>
		  
		  <hr>
</body>
</html>
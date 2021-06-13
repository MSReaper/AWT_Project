<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student report</title>
    <style>
        
        body{

               
                border:  3px solid brown;
            
               background-color: aquamarine;
        }
        h1{
             text-align: center;
        }


    </style>
</head>
<body>

<br>
<br>

<h1>STUDENT FINAL REPORT......</h1>


<hr>

<center>

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

} 

else {

    
echo 'You should select a file to upload !!';

}
}

echo "<br><img src=\"" . $location . $name . "\" width=\"200px\">";

echo "<br><br>firstname : " . $_POST['fname'];

echo "<br><br>middle name is : " . $_POST['mname'];

echo "<br><br>lastname : " . $_POST['lname'];


echo  "<br><br>fathers name:" . $_POST['fathername'];

echo "<br><br>adress: : " . $_POST['text'];
echo "<br><br>email: " . $_POST['email'];
echo "<br><br>gender: " . $_POST['gender'];
echo "<br><br>percentage in degree : " . $_POST['percent'];
 $hobbies = "";
            if (isset($_POST['gaming']))
                $hobbies .= "gaming";

            if (isset($_POST['sketching']))
                $hobbies .= "sketching";

            if (isset($_POST['coding']))
                $hobbies .= " coding";

            if(isset($_POST['binge']))
                 $hobbies.= "binge watching";

echo "<br><br>Hobbies:\t" . $hobbies;

echo "<br><br>Institution Studeied: " . $_POST['school'];


echo "<br><br> Contact Number : " . $_POST['phone'];

echo "<br><br> course studied : " . $_POST['ug'];

  
echo "<br><br> selected course:" . $_POST['course'];






?>
</center>

</body>
</html>
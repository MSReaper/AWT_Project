

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Employee Form</title>

<style>

h1{

text-align: center;
}
.form{

margin-left:550px;

}

.formbody{

  border:2px solid black;
  border-radius:15px;
  background-color: lightgrey;
}

body{

background-color:lightyellow;
}


</style>
</head>
<body>
<header>

<h1>Employee Form</h1>

</header>



<hr>
<div class="formbody">
<br>
<br>

<form action="empdetial.php" method="post" class="form" enctype="multipart/form-data">

<div class="container">

<label for="fname">Firstname:</label>
<input type="text"  name="fname" id="fname" placeholder="firstname " required>
<br>
<br>


<label for="sname">Secondname:</label>
<input type="text"  name="sname" id="fname" placeholder="secondname "required>
<br>
<br>
<label for="eno">Employee no</label>
<input type="number" name="eno" id="eno" required>
<br>
<br>
<label for="designation">Designation:</label>
<input type="text" name="designation" id="desig" required>
<br>
<br>

<label for="photo">Photo</label>
<input type="file" name="photo" id="photo" accept="image/*" required>
<br>
<br>
<label for="father">Father's Name</label>
<input type="text" name="father" id="father" required>
<br><br>
<label for="address">Enter Address</label>
<textarea name="address" style="vertical-align: middle;" id="address" cols="30" rows="10"></textarea>
<br><br>
<label for="contact">Contact Number</label>
<input type="number" name="contact" id="contact" required>
<br><br>
<label for="catos">empcat</label>
<select name="catos" id="catos" onchange="checkcat();">
<option value="parttime">parttime</option>
<option value="fulltime">fulltime</option>
<option value="contract">contract</option>
</select>
<br><br>
<label for="hours">Hours Worked </label>
<input type="number" name="hours" id="hours" required>
<br>
<br>
<label for="salary">Basic Salary </label>
<input type="number" name="salary" id="salary" required>
<br>
<br>
<label for="dob">Date of Birth</label>
<input type="date" name="dob" id="dob" required>
<br><br>
<label for="gender">Gender</label>
<br>
<label for="">Male</label>
<input type="radio" name="gender" id="gender" value="male">
<label for="">Female</label>
<input type="radio" name="gender" id="gender" value="female">


</div>
<input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset">

</form>

</div>


<script>

hours = document.getElementById('hours');
category = document.getElementById('catos');
basic = document.getElementById('salary');
basic.style.display = "none";


   function checkcat(){

    var categoryOfEmpoyee = category.options[category.selectedIndex].text;
if (categoryOfEmpoyee != "parttime") {
hours.style.display = "inline-block";
basic.style.display = "inline-block";

} else {
hours.style.display = "inline-block";
basic.style.display = "inline-block";

}

}

</script>

 




</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="undefined" crossorigin="anonymous">
    </script>

    <title>Application form</title>

      <style>
           
             .header h1{

                      font-family: helvetica;

                      border: solid 2px blue;

                      border-radius: 15px;

                      text-align: center;


             }

             .body
             {


                    background-color:none;

             }


            
      
      </style>
</head>
<body>
         <div class="header">
         
              <h1>Nitte PG Course</h1>
              <hr>
    <center>

    <h3> Student Application form:-</h3>

    </center>
   
         </div>

         <form action="stud.php" name="studform" class="needs-validation" method="post" enctype="multipart/form-data" novalidate>

         <div class="container">
         
     <div class="input-group mb-3 body">

          <span class="input-group-text" id="basic-addon1">Firstname:</span>
          <input type="text" class="form-control" placeholder="firstname" aria-label="Username" name="fname" aria-describedby="basic-addon1" required>
        
          <div class="invalid-feedback">
           doesn't look good! needs internet connection to load css!
          </div>
     </div>

     <div class="input-group mb-3 body">

          <span class="input-group-text" id="basic-addon1">Middlename:</span>
          <input type="text" class="form-control" placeholder="middlename" aria-label="Username" name="mname" aria-describedby="basic-addon1" required >

     </div>

    
     <div class="input-group mb-3 body">

   <span class="input-group-text" id="basic-addon1">Lastname:</span>
    <input type="text" class="form-control" placeholder="lastname" aria-label="Username" name="lname" aria-describedby="basic-addon1" required>

</div>
<br>
<br>

     
 <label for="last">Upload Photo:</label>
<input type="file" name="photo" id="photo" accept="image/*">

<br>
<br>

    
<div class="input-group mb-3 body">

<span class="input-group-text" id="basic-addon1">Fathername:</span>
 <input type="text" class="form-control" placeholder="lastname" aria-label="Username" name="fathername" aria-describedby="basic-addon1" required>

</div>

    
<div class="input-group mb-3 body">

<span class="input-group-text" id="basic-addon1">Address:</span>
<textarea class="form-control" name="text" aria-label="With textarea" required></textarea>

</div>

<div class="input-group mb-3 body">

<span class="input-group-text" id="basic-addon1">Phone no:</span>
 <input type="tel" class="form-control" placeholder="Phoneno:" aria-label="Username" name="phone" aria-describedby="basic-addon1" required>

</div>


<div class="input-group mb-3 body">

<span class="input-group-text" id="basic-addon1">Email:</span>
 <input type="email" class="form-control" placeholder="email:" aria-label="Username" name="email" aria-describedby="basic-addon1" required>

</div>


<div class="input-group mb-3 body">

<span class="input-group-text" id="basic-addon1">Date of birth:</span>
 <input type="date" class="form-control" placeholder="Date of birth" aria-label="Username" name="dob" aria-describedby="basic-addon1" required>

</div>

 <label for="gender">Gender:</label>

  <label for=""> male:</label>
  <input type="radio" name="gender">

  <label for=""> female:</label>
  <input type="radio" name="gender">



 
<div class="input-group mb-3 body">

  <label for="percent">Percentage in Degree:</label>
 <input type="number" onkeyup="checkpercent();" id="percent" name="percent" class="form-control" placeholder="percentage:" aria-label="Username" aria-describedby="basic-addon1" required>

</div>

<label for="inlinecheckbox1"> Hobbies:</label>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="gaming" value="option1" >
  <label class="form-check-label" for="inlineCheckbox1">Gaming</label>
</div>


<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="coding" value="option2" >
  <label class="form-check-label" for="inlineCheckbox2">Coding</label>
</div>


<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="sketching" value="option2"> 
  <label class="form-check-label" for="inlineCheckbox2">Sketching</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="binge" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">Binge Watching</label>
</div>

<div class="input-group mb-3 body">

<span class="input-group-text" id="basic-addon1">Institution Studied:</span>
 <input type="text" class="form-control" placeholder="" aria-label="Username" name="school" aria-describedby="basic-addon1" required>

</div>

 <label for="ug">Cource Studied</label>
            <br>
            <label for="">BCA</label>
            <input type="radio" onclick="checkcourse();" name="ug" id="bca" value="BCA" required>
            
            <label for="">BSc</label>
            <input type="radio" onclick="checkcourse();" name="ug" id="bsc" value="BSc" required>
            
            <label for="">Bcom</label>
            <input type="radio" onclick="checkcourse();" name="ug" id="bcom" value="Bcom" required>
            
            <label for="">B.E</label>
            <input type="radio" onclick="checkcourse();" name="ug" id="be" value="B.E" required>



<script>
     
     percentage = 0;
    function checkpercent()

    {


                    percentage = document.getElementById("percent").value;
                    msc = document.getElementById("msc");
                    mca = document.getElementById("mca");
                    mba = document.getElementById("mba");
                    mtech = document.getElementById("mtech");
                    console.log(percentage);

                    if (percentage > 70) {
                        msc.disabled = false;
                        mca.disabled = false;
                    } 

                    else {
                        msc.disabled = true;
                        mca.disabled = true;
                    }

                    if (percentage > 60) {
                        mba.disabled = false;
                    } else {
                        mba.disabled = true;
                    }


                    if (percentage > 40) {
                        mtech.disabled = false;
                    } 


                    else {
                        mtech.disabled = true;
                    }
                }
    

    function checkcourse() {


        bca = document.getElementById("bca");
        bcom = document.getElementById("bcom");
        bsc = document.getElementById("bsc");
        be = document.getElementById("be");



                    if (be.checked)
                        mtech.disabled = false;
                    else

                        mtech.disabled = true;
                    if (bsc.checked || bca.checked) {
                        msc.disabled = false;
                        mca.disabled = false;
                    }

                     else {
                        msc.disabled = true;
                        mca.disabled = true;
                    }
                }


    

    </script>




<br>
<br>

 <label for="course">SELECT COURSE:</label>
            <br>
            <label for="">MCA</label>
            <input type="radio" name="course" disabled id="mca" value="MCA" required>
            
            <label for="">MBA</label>
            <input type="radio" name="course" disabled id="mba" value="MBA" required>
          
            <label for="">MTech</label>
            <input type="radio" name="course" disabled id="mtech" value="MTech" required>
          
            <label for="">MSc</label>
            <input type="radio" name="course" disabled id="msc" value="MSc" required>
 <br>
 <br>
 <br>

<button type="submit" class="btn btn-primary">Submit</button>

<button type="reset" class="btn btn-success">Reset</button>

</div>


</form>
         

<script>
(function () {     
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()     

    </script>

 

          
           
</body>
</html>
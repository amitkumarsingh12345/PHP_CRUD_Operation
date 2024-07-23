
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="con">
        <div class="title">
            Regisration Form
        </div>
        <form method="post" action='#' autocomplete="off">
        <div class="form" >

            <div class="input_feild">
                <label >First Name</label>
                <input type="text" class='input' name='firstname' required>
            </div>

            <div class="input_feild">
                <label >Last Name</label>
                <input type="text" class='input' name='lastname'required>
            </div>

            <div class="input_feild">
                <label >Password</label>
                <input type="password" class='input' name='password' required>
            </div>

            <div class="input_feild">
                <label >Confrim Password</label>
                <input type="password" class='input' name='confrompassword' required>
            </div>

            <div class="input_feild">
                <label >Gender</label>
                <select class="box" name='gender' required>
                    <option value='NULL'>Select</option>
                    <option >Male</option>
                    <option >Female</option>
                </select>
            </div>

            <div class="input_feild">
                <label >Email</label>
                <input type="email" class='input' name='email' required>
            </div> 

            <div class="input_feild">
                <label >Phone</label>
                <input type="number" class='input' name='phone' required>
            </div>

            <div class="input_feild">
                <label >Address</label>
                <textarea class='textarea' name='textarea' required></textarea>
            </div>

            <div class="input_feild term">
              <label class='check' >  
               <input type="checkbox" required/>
               <span class='checkmark'></span>
               </label>
               <p>Agree to term and condition</p>  
            </div>

            <div class='input_feild'>
              <input type="submit" value="Registration" class='btn' name='btn'>
            </div>
            
        </div>
      </div>
    </form>
</body>
</html>
<?php
//Fetch the data in html page and store the database

include("connection.php");
if(isset($_POST['btn'])){
     $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'];
     $password=$_POST['password'];
     $confrompassword=$_POST['confrompassword'];
     $gender=$_POST['gender'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $textarea=$_POST['textarea'];
    
    if($password==$confrompassword){
      $insertdata=$conn->prepare("insert into data values('$firstname','$lastname','$password',
      '$confrompassword','$gender','$email','$phone','$textarea')");
      $insertdata->execute();

    }else{
        echo "<script>alert('Password and confrom password are not match')</script>";
    }
}
?>
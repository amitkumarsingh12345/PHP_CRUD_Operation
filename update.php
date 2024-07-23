<?php
include("connection.php");
if(isset($_GET['email'])) {
    $email = $_GET['email'];
    $query = "SELECT * FROM data WHERE email='$email'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);
}
// print_r($result);
if(isset($_POST['btn'])){
    // echo "Updated";
}

include("connection.php");
if(isset($_POST['update'])){
     $firstname=$_POST['firstname'];
     $lastname=$_POST['lastname'];
     $gender=$_POST['gender'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $textarea=$_POST['textarea'];
    
    
      $updatedata="UPDATE data SET firstname='$firstname',lastname='$lastname',gender='$gender',phone='$phone',
      address='$textarea' WHERE email='$email'";
      $data=mysqli_query($conn,$updatedata);
    //   echo $updatedata;
     }
      if($data){
        // echo "Updated";
      }else{
        echo "Record Not Updated";
      }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body{
            background-color:red;
        }
        .update{
            height: 40px;
            width:100%;   
            font-size: 20px;
            border-radius: 3px;
            cursor: pointer;
            border-color: aquamarine;
            background-color: aquamarine;
        }
        .update:hover{
            background-color:aquamarine;
        }
    </style>
</head>
<body>  
    <div class="con">
        <div class="title">
            Update Regisration Form
        </div>
        <form method="post" action='#' autocomplete="off">
        <div class="form" >

            <div class="input_feild">
                <label >First Name</label>
                <input type="text" class='input' value="<?php echo $result['firstname']?>" name='firstname' required>
            </div>

            <div class="input_feild">
                <label >Last Name</label>
                <input type="text" class='input' value="<?php echo $result['lastname']?>"  name='lastname'required>
            </div>

            <div class="input_feild">
                <label >Password</label>
                <input type="password" class='input' value="<?php echo $result['password']?>" name='password' required>
            </div>

            <div class="input_feild">
                <label >Confrim Password</label>
                <input type="password" class='input' value="<?php echo $result['confrompassword']?>" name='confrompassword' required>
            </div>

            <div class="input_feild">
                <label >Gender</label>
                <select class="box" name='gender' required>
                    <option value='NULL'>Select</option>
                    <option value="Male"
                    <?php 
                         if($result['gender']=='Male'){
                            echo "Selected";
                         }
                      ?>
                    >Male</option>
                    <option value='Female'
                    <?php 
                         if($result['gender']=='Female'){
                            echo "Selected";
                         }
                      ?>
                    >Female</option>
                </select>
            </div>

            <div class="input_feild">
                <label >Email</label>
                <input type="email" class='input' value="<?php echo $result['email']?>" name='email' required>
            </div> 

            <div class="input_feild">
                <label >Phone</label>
                <input type="number" class='input'value="<?php echo $result['phone']?>" name='phone' required>
            </div>

            <div class="input_feild">
                <label >Address</label>
                <textarea class='textarea' name='textarea' required><?php echo $result['address']?>
                </textarea>
            </div>

            <div class="input_feild term">
              <label class='check' >  
               <input type="checkbox" required/>
               <span class='checkmark'></span>
               </label>
               <p>Agree to term and condition</p>  
            </div>

            <div class='input_feild'>
              <input type="submit" value="Update Registration Page" class='update' name='update'>
            </div>
            
        </div>
      </div>
    </form>
</body>
</html>

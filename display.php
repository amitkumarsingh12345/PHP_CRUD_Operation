<?php
  
// //Delete the data in database
include("connection.php");
 if(isset($_POST['delete'])){
   $email=$_POST['email'];
  //  echo $email;
  //  print_r($fname);
   $query=$conn->prepare("DELETE FROM data WHERE email='$email' ");
   $query->execute();
 }
?>
<html>
  <head><title>Display</title></head>
  <style>
    body{
      background-image: url("download2.jpg");
      /* background-image:url("download2.jpg") */
      background-color:aquamarine;
    }
    table{
      background-color:white;
      text-align:center;
    }
    table th{
      background-color:green;
    }
    #update{
      background-color:green;
      border:2px solid green;
      color:white;
      border-radius:5px;
      text-decoration:none;
    }
    #delete{
      color:white;
      background-color:red;
      border:2px solid red;
      border-radius:5px;
    }
  </style>
</html>
<?php
include("connection.php");
error_reporting(0);
$query='select *from data';
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);

// echo $total;
// print_r($result);
// echo $result['fname']; 

if($total != 0){
  ?>
  <h1 align='center'><u><mark>Display All Records</mark></u></h1>
  <table border='1' cellspacing='3'  align='center' width='90%' >
    <tr >
      <th width='15%'>FirstName</th>
      <th width='15%'>LastName</th>
      <th width='15%'>Gender</th>
      <th width='20%'>Email</th>
      <th width='15%'>Phone</th>
      <th width='15%'>Address</th>
      <th colspan='3' width='30px'>Operation
      </th>
    </tr>
  
  <?php 
  while($result=mysqli_fetch_assoc($data)){
    $e =  $result['email'];
    echo 
      "<tr>
        <td>".$result['firstname']."</td>
        <td>".$result['lastname']."</td>
        <td>".$result['gender']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['address']."</td>
        <td><a href='update.php ? email=$result[email]' target='_blank' id='update' name='update'>Update</a></td>
        <form action='display.php' method='post'>
         <input type='hidden' value='$e' id='email' name='email'/>
         <td><input type='submit' id='delete' name='delete' value='Delete'/> </td>
         
        </form>
      </tr>
      ";

  }
}else{
  echo "Table has not record";
}

?>
</table>


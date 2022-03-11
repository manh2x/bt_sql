 
 <?php
 require "./ketnoi.php";
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <form method="POST" action="">
     Name:<input type="text" name="name" value=""><br/><br/>
     Email:<input type="text" name="email" value=""><br/><br/>
     Phone:<input type="text" name="phone" value=""><br/><br/>
     Address:<input type="text" name="address" value=""><br/><br/>
    <input type="submit" value="Insert" name="inset"><input type="submit" name="select" value="Select"><br/><br/>
</form>
     <table border="1">
        <tr><th>name</th> 
        <th>email</th>
        <th>phone</th>
        <th>address</th>
        </tr>
        <?php

if(isset($_POST['inset']) & $_POST['name']!=""){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

if($_POST['inset']){

$sql = "INSERT INTO preson value('$name','$email','$phone','$address')";

if(mysqli_query($conn,$sql)){?>
<h3>
<?php echo "Thành công";?></h3>
<?php
 } 


} 
}





if(isset($_POST['select'])){ 
      $sql1="SELECT * from preson";
$result=$conn->query($sql1);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        
        ?>
        <tr>
            <td><?php echo   $row['name'] ?></td>
            <td><?php echo  $row['email'] ?></td>
            <td><?php echo   $row['phone'] ?></td>
            <td><?php echo  $row['address'] ?></td>
        </tr>
        <?php
    }
}
}
$conn->close();
?>

        
    </table>
 </body>
 </html>
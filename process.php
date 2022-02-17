<?php

$name = $_POST['nameField'];
$email = $_POST['emailField'];
$phone = $_POST['phoneField'];
$message = $_POST['messageField'];
$date = date('Y-m-d H:m:s');

$connect = mysqli_connect("localhost","root","","maindomain");

$query="INSERT INTO project_contact(name,email,phone,message,contact_date) VALUES('$name','$email','$phone','$message','$date')";

$run = mysqli_query($connect,$query);
if($run){
  echo "Success";
}
else{
  echo "Error";
}
 ?>

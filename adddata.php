<?php

if (isset($_POST['submit'])) {

$first_name = $_POST['firstname'];

$last_name = $_POST['lastname'];

$email = $_POST['email'];

$password = $_POST['password'];

$gender = $_POST['gender'];

$favfoodchk = $_POST['favfood'];
$chk="";  
foreach($favfoodchk as $chk1)  
   {  
      $chk.= $chk1.",";  
   }  
   

$sql = "INSERT INTO `customers`(`cname`, `clastname`, `cemail`, `cpass`, `cgender`,`favfoodchk`) VALUES ('$first_name','$last_name','$email','$password','$gender','$chk')";


$result = $conn->query($sql);

if ($result == TRUE) {

  echo "New record created successfully.";

}else{

  echo "Error:". $sql . "<br>". $conn->error;

} 

$conn->close(); 

}

?>

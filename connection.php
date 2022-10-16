<?php
$conn= mysqli_connect("localhost","root","","data"); 
if(!$conn){
    die("connection failed".mysqli_connect_error());
}
echo "successfull";
    $firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$adharcard = $_POST['adharcard'];
	$pincode = $_POST['pincode'];
	$state = $_POST['state'];
	$interest = $_POST['interest'];

   $query ="INSERT INTO registration(firstname,lastname,gender,phone,email,adharcard,pincode,state,interest) 
   VALUES('$firstname' ,'$lastname', '$gender' , '$phone' ,'$email' ,'$adharcard','$pincode','$state','$interest')";
   $data=mysqli_query($conn , $query);
   if($data)
   {
       echo "Data inserted successfully!!";
   }else{
	   echo "Data inserted failed!!";
   }
?>
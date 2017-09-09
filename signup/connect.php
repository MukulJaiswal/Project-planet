<?php
 $name=$_POST['name'];
  $gender=$_POST['gender'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $password_confirmation=$_POST['password_confirmation'];
   $user_type=$_POST['user_type'];
 mysql_connect("localhost","root","");
 mysql_select_db("project_era_db");
 
 $query="SELECT * from user WHERE user_name='$name'";
 $result=mysql_query($query);
 $count=mysql_fetch_array($result);
 if($count==0)
 {
 $query1="INSERT INTO user(user_name,user_gender,user_contact,user_email,user_password,user_type) VALUES ('$name','$gender','$contact','$email','$password','$user_type')";
 mysql_query($query1);



 echo"<b><center><h1>Congratulations You Are Successfully Registered</h1></center></b>";
 }
 else
 echo"<b><center><h1>This User name has already registered Please choose other.</h1></center></b>";
 ?>
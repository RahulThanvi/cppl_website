<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="rahul";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{
     $first_name = $_POST['firstname'];
     $last_name = $_POST['lastname'];
     $phone_no = $_POST['phone'];
     $email= $_POST['email'];
     $password = $_POST['pass'];


     $sql_query = "INSERT INTO registration (Firstname,Lastname,Phone, Email ,Password)
     VALUES ('$first_name','$last_name','$phone_no','$email','$password')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
     } 
     else
     {
      echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>

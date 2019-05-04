<?php
if (isset($_POST['submit'])) {
$dbserverName = "localhost";
$dbuserName = "";
$dbpassword = "";
$dbname = "thomas_users";

$conn = mysqli_connect( $dbserverName , $dbuserName , $dbpassword , $dbname );


$nombre = mysqli_real_escape_string( $conn , $_POST['name']);

$email = mysqli_real_escape_string( $conn , $_POST['email']);

$comment = mysqli_real_escape_string( $conn , $_POST['comment']);

    if (empty($nombre) or empty($email) or empty($comment)) {
    	      echo "<script>alert('please instert the missing input');</script>";

  
}

    else{
        $sql = "INSERT INTO u_comment(u_name , u_email , u_coment) VALUES ('$nombre','$email','$comment');";
        
        mysqli_query($conn , $sql);
      echo "<script>alert('thanks+$nombre+!');</script>";
				}
}
?>
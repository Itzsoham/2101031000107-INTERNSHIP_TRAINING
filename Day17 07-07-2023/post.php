<?php
$username1=$_POST['username'];
$password1=$_POST['password'];

// echo $username;
// echo "<br>";
// echo $password;
// echo "<br>";
// echo $emailid;
// echo "<br>";
$servername ="localhost";
$username = "root";
$password = "";
$db = "mydb";
$conn = mysqli_connect($servername,$username,$password,$db);
if (!$conn){
    die("connection failed".mysqli_connect_error());
}
$sql = "insert into Table01 (username,password1) values ('$username1','$password1')";
            
        if (mysqli_query($conn, $sql)) {
                   echo " successfully";
                 } else {
                   echo "Error creating table: " . mysqli_error($conn);
                  }
?>
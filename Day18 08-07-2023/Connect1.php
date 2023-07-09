<?php
$username="root";
$servername="localhost";
$password="";
$db="myDB1";
$conn=mysqli_connect($servername,$username,$password,$db);
// if(!$conn){
//     die("Connection failed".mysqli_connect_error());
//     // die function show an error
// }
// $sql = "CREATE TABLE person5(
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   FirstName VARCHAR(30) NOT NULL,
//   LastName VARCHAR(30) NOT NULL,
//   ContactNo INT(10) NOT NULL,
//   EmailId VARCHAR(50) NOT NULL
//   )";
// if (mysqli_query($conn,$sql)) {
//   echo "Table person1 created successfully";
// } else {
//   echo "Error creating table: " . mysqli_error($conn);
// }
// $sql="insert into person5 (FirstName,LastName,ContactNo,EmailId) values ('karan','maheriya','9601316858','karanmaheriya4@gmail.com')";
// if (mysqli_multi_query($conn,$sql)) {
//     echo "inserted successfully";
// }
// else{
//    echo "Error creating table: " . mysqli_error($conn);
// }
// $sql = "UPDATE person4 SET LastName='maheriya' WHERE id=4";

// if (mysqli_query($conn,$sql)) {
//         echo "updated successfully";
//     }
//     else{
//        echo "Error creating table: " . mysqli_error($conn);
//     }
$sql="SELECT * FROM person4";
$result=mysqli_query($conn,$sql);
// print_r($result);
// if (mysqli_num_rows($result) > 0) {
//     // output data of each row
//     while($row = mysqli_fetch_assoc($result)) {
      
//     }
//   } else {
//     echo "0 results";
//   }
if (mysqli_num_rows($result) > 0) {
    echo "<table><tr><th>iD</th><th>FirstName</th><th>LastName</th><th>ContactNO</th><th>EmailId</th><th>update</th><th>delete</th></tr>";
    // output data of each row
    while($row =mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row["id"]."</td><td>".$row["FirstName"]."</td><td>".$row["LastName"]."</td><td>".$row["ContactNo"]."</td><td>".$row["EmailId"]."</td><td>"."<a href=update.php>update</a> "."</td><td>"."<a href=delete.php>delete</a> "."</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
?>
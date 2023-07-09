<body>
    <?php 
        $servername ="localhost";
        $username = "root";
        $password = "";
        $db = "mydb";
        $conn = mysqli_connect($servername,$username,$password,$db);
        if (!$conn){
            die("connection failed".mysqli_connect_error());
        }
        // $sql = "create database myDB";
        // if (mysqli_query($conn,$sql))
        // {
        //     echo "database created";
        // }
        // else{
        //     echo "error";
        // }
        // $sql = "CREATE TABLE Table01 (
        //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //     username VARCHAR(30) NOT NULL,
        //     password1 VARCHAR(30) NOT NULL
        //    )";
        //     if (mysqli_query($conn, $sql)) {
        //         echo "Table Table01 created successfully";
        //       } else {
        //         echo "Error creating table: " . mysqli_error($conn);
        //       }
        // $sql = "insert into Table01 (username,password1) values ('itzme','ME123')";
            
        // if (mysqli_query($conn, $sql)) {
        //            echo " successfully";
        //          } else {
        //            echo "Error creating table: " . mysqli_error($conn);
        //           }

        
        // $sql = "insert into Table01 (username,password1) values ('$username','$password')";
            
        // if (mysqli_query($conn, $sql)) {
        //            echo " successfully";
        //          } else {
        //            echo "Error creating table: " . mysqli_error($conn);
        //           }
        
        // $sql = "DELETE FROM Table01 WHERE id=8";

        // if ($conn->query($sql) === TRUE) {
        // echo "Record deleted successfully";
        // } else {
        // echo "Error deleting record: " . $conn->error;
        // }

        $sql = "UPDATE Table01 SET username='karan' WHERE id=11";

        if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
        } else {
        echo "Error updating record: " . $conn->error;
        }

    ?>
</body>
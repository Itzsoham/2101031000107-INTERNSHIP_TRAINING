<?php
    $Fname = $_POST['fname1'];
    $Lname = $_POST['lname1'];
    $Email = $_POST['email1'];
    $Contact = $_POST['contact1'];
    $Feedback = $_POST['msg1'];

    // echo $Fname;
    // echo $Lname;
    // echo $Email;
    // echo $Contact;
    // echo $Feedback;

    $username = "root";
    $servername = "localhost";
    $password = "";
    $dbname = "formdata";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(! $conn){
        die("Connection failed".mysqli_connect_error());
    }

    $sql  = "INSERT INTO data(First_Name,Last_Name,Email,Contact,Feedback) VALUES ('$Fname','$Lname','$Email','$Contact','$Feedback') ";
    if(mysqli_query($conn,$sql)){
        echo "Data Inserted";
    }
    else{
        echo "error";
    }
    
?>
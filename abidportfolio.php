<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{



    if(isset($_POST['Submit']))
    {
        $name=$_POST['Name'];
        $email=$_POST['Email'];
        $message=$_POST['Message'];

        $connection= mysqli_connect('localhost','root','12345','abid');
        if(!$connection){die("Connection Failed" . mysqli_connect_error());}
        
        $insert_query = "INSERT INTO abidtable (Name,Email,Message)";
        $insert_query = "VALUES ('$name','$email','$message')";

        $insert = mysqli_query($connection,$insert_query);
        if(!$insert){die("Not inserted" . mysqli_error($connection));}
        echo "Connected succesfully !";
    }
    mysqli_close($connection);
}
?>
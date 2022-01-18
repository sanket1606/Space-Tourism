<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking succesful</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    


<?php

$servername="localhost";
$username="root";
$password="";
$database="modern";

//Connect a database.
$conn = mysqli_connect($servername, $username,$password,$database);

if($conn){
    echo("Connection Successful");
}else{
    echo"Connection error".$conn-->connect_error;

} 

//  Creating a table in database for appointment details. 

$table1="CREATE TABLE `booking`(`serial` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `planet` VARCHAR(255) NOT NULL,  PRIMARY KEY (`serial`))";
$sample2 = mysqli_query($conn ,$table1);

if($sample2){
    echo"Table created succesfully";
}else{
    echo"Something wents wrong --->".mysqli_error($conn);
}




//obtaining user input from the user.html file
$username= $_POST['user-name'];
$email= $_POST['user-email'];
$planet= $_POST['user-selection'];


/*Inserting a values of appointment form into the table1 table */

$addedvalues= "INSERT INTO `booking`( `name` , `email`  , `planet` ) VALUES('$username', '$email', '$planet')";
$sample4=mysqli_query($conn, $addedvalues);

if($sample4){
    echo"Information added successfully";
}else{
    echo"Insertion error-->". mysqli_error($conn);
}



    
?> 

    <br><br>
<a href="HomePage.html">Home</a>



</body>
</html>
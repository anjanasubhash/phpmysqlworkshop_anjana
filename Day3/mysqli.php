<?php

require('connect.php');

if(isset($_POST['submit']))
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $dob = $_POST['birth'];

    $result = mysqli_query($conn, "INSERT INTO person(firstname,lastname,dob) VALUES('$firstname', '$lastname', '$dob');");

    if($result){
        echo "Success";

    }
    else
        echo "Not inserted";
}

/*
$firstname = "Anjana";
$lastname = "Subhash";
$dob = "2002-08-23";
$id = 1000;

$result = mysqli_query($conn, "INSERT INTO person VALUES($id,'$firstname','$lastname','$dob')");

if($result){
    echo "Sucess";
}
else
    echo "Not inserted";
*/

?>

<html>
    <body>
        <form action="mysql.php" method="POST">
            First Name : <input type ="text" name = "fname"/><br/>
            Last Name : <input type = "text" name = "lname"/><br/>
            Date of Birth : <input type = "date" name = "birth"/><br/>
            <input type = "submit" name="submit" value = "Click me">
            <input type = "reset" value = "Clear form">
        </form>    
    </body>
</html>
<?php
class db{
 
function OpenCon()
 {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "mydb";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    
    return $conn;
 }

 function InsertData($conn,$table,$name,$email,$Username,$password,$confirmpassword,$gender,$date)
 {
    $sql = "INSERT INTO $table (Name, Email, UserName, Password ,ConfirmPassword, Gender, DateOfBirth) 
    VALUES ('$name', '$email','$Username', '$password' ,'$confirmpassword','$gender','$date')";
    
    $result = $conn->query($sql);
    if($result)
    { 
        echo "New record has been inserted"; 
        return $result;
    }
    else
    {
        echo "An Error Occurred".$conn->error;
    }
  
 }


 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
 }


function CloseCon($conn)
 {
    
  $conn -> close();
 }
}
?>
<?php
include('db.php');

$validatename="";
$validateemail="";
$validateusername="";
$validatepassword="";
$validateinfo=""; 
$validateradio="";
$v1 = $v2 = $v3 ="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
 
 
$name=$_REQUEST["name"]; 
$Username=$_REQUEST["Username"];
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
$confirmpassword=$_REQUEST["confirmpassword"];
$gender=$_REQUEST["gender"];
$date= $_REQUEST["date"];
 

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->InsertData($conobj,"student",$name,$email,$Username,$password,$confirmpassword,$gender,$date);
$connection->CloseCon($conobj);
if(empty($name) ||empty($Username) ||empty($email) ||empty($password) ||empty($confirmpassword)||empty($date))
{
  $validateinfo="You must fill up all the information";
}
else
{
    if((strlen($Username)<5) ||!preg_match("/[a-zA-Z0-9._]+/", $Username))
    {
        $validateusername="You must enter your Username";
    }
    else
    {
        $validateusername= "Your user name is ".$Username;
    }
    
    if((strlen($password)<8) ||!preg_match("/(?=.*[@#$%^&+=]).*$/",$password))
    {
        $validatepassword="You must enter your password";
    }
    else
    {
        $validatepassword= "your password is ".$password;
    }
    if($password==$confirmpassword)
    {
    $v1= "Password matched";
    
    }
    else
    {
        $v1="COnfirm Password does not match";
    }


    if(empty($email) || !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/i", $email))
    {
        $validateemail="You must enter your email";
    }
    else
    {
        $validateemail= "your email is ".$email;
    }
    
    if(isset($gender))
    {
        $validateradio=$gender;
    }
    else{
        $validateradio="You have to select an option for gender";
    }
}
/*$target_dir= "files/";
$target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);


    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
    {
    echo "<img src='".$target_file."'>";
    } 
    else 
    {
    echo "An error while uploading your file";
    }*/
}
?>

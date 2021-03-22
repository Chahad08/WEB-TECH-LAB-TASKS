<?php
session_start(); 

include('../control/updatecheck.php');


if(empty($_SESSION["username"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Profile Page</h2>

Hii, <h3><?php echo $_SESSION["username"];?></h3>
<br>Your Profile Page.
<br><br>
<?php
$radio1=$radio2=$radio3="";
$p1=$p2=$p3=$p4="";
$i1=$i2=$i3="";

$firstname=$email="";
$username=$password="";
$address=$dob=$profession=$interest="";

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"student",$_SESSION["username"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {

      $username=$row["username"];
      $password=$row["password"];
      $firstname=$row["firstname"];
      $email=$row["email"];
      $address=$row["address"];
      $dob=$row["dob"];
     
      if(  $row["gender"]=="female" )
      { $radio1="checked"; }
      else if($row["gender"]=="male")
      { $radio2="checked"; }
      else{$radio3="checked";}


      if(  $row["profession"]=="faculty" )
      { $p1="checked"; }
      else if($row["profession"]=="academics")
      { $p2="checked"; }
      else if($row["profession"]=="student")
      { $p3="checked"; }
      else{$p4="checked";}
      
      if(  $row["interests"]=="Music" )
      { $i1="checked"; }
      if($row["interests"]=="Sports")
      { $i2="checked"; }
       if($row["interests"]=="Movies")
      { $i3="checked"; }
     


      

   
  } 
}
  else {
    echo "0 results";
  }



?>

<form action='' method='post'>
username : <input type='text' name='username' value="<?php echo $username; ?>" >

password : <input type='text' name='password' value="<?php echo $password; ?>" >

firstname : <input type='text' name='firstname' value="<?php echo $firstname; ?>" >

email : <input type='text' name='email' value="<?php echo $email; ?>" >

address : <input type='text' name='address' value="<?php echo $address; ?>" >
<br><br>
Date_Of_Birth : <input type='date' name='dob' value="<?php echo $dob; ?>" >

<br><br>
 Gender:
     <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female
     <input type='radio' name='gender' value='male' <?php echo $radio2; ?> >Male
     <input type='radio' name='gender' value='other'<?php  $radio3; ?> > Other
     <br><br>

 <label for = "profession"> Select your profession : </label>
 <select id= "profession">

 <option value = "faculty"> faculty </option> <?php echo $p1; ?>
 <option value = "academics"> academics </option> <?php echo $p2; ?>
 <option value = "student"> student </option> <?php echo $p3; ?>
 <option value = "employee"> employee </option> <?php echo $p4; ?>
 </select>
 <br><br>




 Select your interests : 
 <input type="checkbox" name="i1" value="Music"> <?php echo $i1; ?>
 <label for="i1"> Music </label><br>
  <input type="checkbox" name="i2" value="Sports"> <?php echo $i2; ?>
  <label for="i2"> Sports</label><br>
  <input type="checkbox" name="i3" value="Movies"> <?php echo $i3; ?>
  <label for="i3"> Movies </label><br><br>

 


     <input name='update' type='submit' value='Update'>  

     <?php echo $error; ?>
<br>
<br>
<a href="../view/pageone.php">Back </a>

<a href="../control/logout.php"> logout</a>

</body>
</html>
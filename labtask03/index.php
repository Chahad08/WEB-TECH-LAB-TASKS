<?php include "control/logincheck.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title> Database Validation Check </title>
</head>
 <body>
    <h1>Registration Form</h1>
    <form  action ="<?php echo $_SERVER["PHP_SELF"];?> " method="post" enctype="multipart/form-data">
        <table>
        <tr>
        <td>Name : </td>
        <td><input type="text" id="name" name="name" ><?php echo $validatename; ?></td>
        </tr> 
        <tr>
        <td>Email: </td>
        <td><input type="text" id="email" name="email"><?php echo $validateemail; ?></td>
        </tr> 
        <tr> 
        <td>UserName : </td> 
        <td><input type="text" id="Username" name="Username"> <?php echo $validateusername;?></td>
        </tr>
        
        <td>Password: </td>
        <td><input type="password" id="password" name="password"><?php echo $validatepassword; ?></td>
        </tr>
        <td>Conform Password: </td>
        <td><input type="password" id="confirmpassword" name="confirmpassword"><?php echo $v1; ?></td>
        </tr> 
        
        <tr>
        <?php echo $validateinfo; ?><br>
        <td>Gender<td>
        </tr>
        <tr>
        <td><input type="radio" id="male" name="gender" value="Male"> 
        Male</td>
        <td><input type="radio" id="female" name="gender" value="Female">
        Female</td>
        <td><input type="radio" id="other" name="gender" value="Other">
        Other<?php echo $validateradio; ?></td> 
        </tr>
        <tr>
        <br></tr>
        <tr> 
        <td> Date Of Birth </td>
        </tr>
        <tr>
        <td><input type="date" id="date" name="date"></td>    
        </tr>  
        <tr>
        <td><input type="file" name="fileToUpload"></td>
        <br>
        <br>
        </tr>
        <tr>
        <td><input type="submit" value="Submit"></td>
        <td><input type="reset" value="Reset"></td></tr>
        </table>
    </form>
</body> 

</html>
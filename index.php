<?php
session_start();

define('SITEURL','http://localhost/registration/');
define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','a-foods');
$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>
<?php
if(isset($_SESSION['finish'])){
    $finish=addslashes($_SESSION['finish']);
    echo "<script type='text/javascript'>alert('$finish');</script>";
    unset($_SESSION['finish']);
}
?>
<html lang="en">
<body>
    <form action="" method="POST">
     <label>Fname*</label>
     <input type="text" required name="fname">
     <br />
     <br>
     <label>Lname*</label>
     <input type="text" required name="lname">
     <br />
     <br>
     <label>Mail-Id*</label>
     <input type="email" required name="email">
     <br />
     <br>
     <label>Phone no*</label>
     <input type="number" required name="phone">
     <br>
     <br>
     <label>DOB*</label>
     <input type="date" required name="dob">
     <br>
     <br>
     <label>Gender</label>
     <input type="radio" name="gender" value="Male">Male
     <input type="radio" name="gender" value="Female">Female
     <br>
     <br>
     <label>Address Line 1</label>
     <textarea rows="5" cols="5" name="ad1"></textarea>
     <br>
     <br>
     <label>Address Line 2</label>
     <textarea rows="5" cols="5" name="ad2"></textarea>
     <br>
     <br>
     <label>City</label>
     <input name="city" type="text" required>
     <br>
     <br>
     <label>ZipCode</label>
     <input name="zip" type="number" required>
     <br>
     <br>
     <label>State</label>
     <input name="state" type="text" required>
     <br>
     <br>
     <label>Country</label>
     <input name="country" type="text" required>
     <br>
     <br>
     <input type='submit' name='submit'>
    </form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mail=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $add1=$_POST['ad1'];
    $add2=$_POST['ad2'];
    $city=$_POST['city'];
    $zip=$_POST['zip'];
    $state=$_POST['state'];
    $country=$_POST['country'];
    $mysql="INSERT INTO t_reg SET fname='$fname',lname='$lname',mail_id='$mail',ph_num='$phone',gender='$gender',Add_li1='$add1',Add_li2='$add2',City='$city',dob='$dob',country='$country',state='$state',zip='$zip'";
    $res=mysqli_query($conn,$mysql);
    if($res==true){
        $_SESSION['finish']="Successfully submitted";
        header("location:".SITEURL."frontend.php");
    }
    else{
        $_SESSION['finish']="Not Submitted";
        header("location:".SITEURL);
    }
}

?>
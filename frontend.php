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
<htmL>
<body>
<?php
$mysql="SELECT * FROM t_reg";
$res=mysqli_query($conn,$mysql);
$count=mysqli_num_rows($res);
if($count>0){
    while($row=mysqli_fetch_assoc($res)){
        $fname=$row['fname'];
        $lname=$row['lname'];
        $mail=$row['mail_id'];
        $phone=$row['ph_num'];
        $dob=$row['dob'];
        $gender=$row['gender'];
        $add1=$row['Add_li1'];
        $add2=$row['Add_li2'];
        $city=$row['City'];
        $country=$row['country'];
        $state=$row['state'];
        $zip=$row['zip'];
        ?>
        <h4>FirstName-<?php echo $fname; ?></h4>
        <h4>LastName-<?php echo $lname; ?></h4>
        <h4>Mail-ID-<?php echo $mail; ?></h4>
        <h4>Phone no-<?php echo $phone; ?></h4>
        <h4>DOB-<?php echo $dob; ?></h4>
        <h4>Gender-<?php echo $gender; ?></h4>
        <h4>Address Line 1-<?php echo $add1; ?></h4>
        <h4>Address Line 2-<?php echo $add2; ?></h4>
        <h4>City-<?php echo $city; ?></h4>
        <h4>Country-<?php echo $country; ?></h4>
        <h4>State-<?php echo $state; ?></h4>
        <h4>ZipCode-<?php echo $zip; ?></h4>
        <hr>
        <?php
    }
}
?>
</body>
</html>


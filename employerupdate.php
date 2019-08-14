<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="employer";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$ab=$_POST['id'];
if(isset($_POST['Update']))
{
$name=$_POST['name'];
$designation=$_POST['designation'];
$id=$_POST['id'];
$department=$_POST['department'];
$bid=$_POST['bid'];
$res2="SELECT * FROM $tbl_name WHERE id='$id'";
$result2=mysqli_query($conn,$res2)or die(mysqli_error($conn));
$cn1=Mysqli_num_rows($result2);
$res2="UPDATE $tbl_name set name='$name',designation='$designation',department='$department',bid='$bid' WHERE id='$id'";
$result=mysqli_query($conn,$res2)or die(mysqli_error($conn));
header('location:emplupddone.php');
}
?>
<?php
$ab1=$_POST['id'];
$res1="SELECT * FROM $tbl_name where id='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
header("Location:employerupdfail.php");
}
else{
while($row=mysqli_fetch_array($result1))
{
$name=$row['name'];
$designation=$row['designation'];
$id=$row['id'];
$department=$row['department'];
$bid=$row['bid'];
}
}
?>
<html>
<head>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h5{color:green;font-family:arial}
#two {position:absolute;top:170px;left:600px}
#d {position:absolute;top:240px;left:510px;font-family:arial;color:green}
#c {position:absolute;top:280px;left:473px;font-family:arial;color:green}
#e {position:absolute;top:320px;left:542px;font-family:arial;color:green}
#f {position:absolute;top:360px;left:473px;font-family:arial;color:green}
#j {position:absolute;top:400px;left:485px;font-family:arial;color:green}
#a {position:absolute;top:0px;left:1100px}
#b {position:absolute;top:440px;left:580px}
#k {position:absolute;top:440px;left:660px}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<title>Update Employer|Payroll System</title>
</head>
<body>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>Update Employer</h3></div>
<div id="two"><h2>Edit Details:</h2></div>
<form action="" method="post">
<div id="d">Name        :<input type="text" name="name" value="<?php echo $name;?>" maxlength="20" size="50"></br></div>
<div id="c">Designation:<input type="text" name="designation" value="<?php echo $designation;?>" maxlength="20" size="50"></br></div>
<div id="e">ID:<input type="text" name="id" value="<?php echo $id;?>" readonly maxlength="10" size="50"></div>
<div id="f">Department:<input type="text" name="department" value="<?php echo $department;?>" maxlength="10" size="50"></div>
<div id="j">Branch ID:<input type="text" name="bid" value="<?php echo $bid;?>" readonly maxlength="10" size="50"></div>
<div id="b"><input type="submit" name="Update" value="Update"></div>
<div id="k"><input type="reset" value="Reset"></div>
</form>
</body>
</html>


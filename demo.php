<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="employee";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$ab=$_POST['eid'];
if(isset($_POST['Update']))
{
$ename=$_POST['ename'];
$phno=$_POST['phno'];
$dob=$_POST['dob'];
$eid=$_POST['eid'];
$designation=$_POST['designation'];
$empid=$_POST['empid'];
$hra=$_POST['hra'];
$da=$_POST['da'];
$epf=$_POST['epf'];
$basic=$_POST['basic'];
$leaves=$_POST['leaves'];
if($leaves>=30)
{
$total=0;
$res2="SELECT * FROM $tbl_name WHERE eid='$eid'";
$result2=mysqli_query($conn,$res2)or die(mysqli_error($conn));
$cn1=mysqli_num_rows($result2);
$res2="UPDATE $tbl_name set ename='$ename',phno=$phno,dob='$dob',designation='$designation',hra='$hra',da='$da',epf='$epf',basic='$basic',total='$total',leaves='$leaves' WHERE eid='$eid'";
$result=mysqli_query($conn,$res2)or die(mysqli_error($conn));
header('location:empupddone.php');
}
else if($leaves>2)
{
$total=(($hra/100)*$basic)+(($da/100)*$basic)+(($epf/100)*$basic)-((2/100)*$basic)+$basic;
$res2="SELECT * FROM $tbl_name WHERE eid='$eid'";
$result2=mysqli_query($conn,$res2)or die(mysqli_error($conn));
$cn1=mysqli_num_rows($result2);
$res2="UPDATE $tbl_name set ename='$ename',designation='$designation',dob='$dob',phno='$phno',hra='$hra',da='$da',epf='$epf',basic='$basic',leaves='$leaves',total='$total' WHERE eid='$eid'";
$result=mysqli_query($conn,$res2)or die(mysqli_error($conn));
header('location:empupddone.php');
}
else
{
$total=(($hra/100)*$basic)+(($da/100)*$basic)+(($epf/100)*$basic)+$basic;
$res2="SELECT * FROM $tbl_name WHERE eid='$eid'";
$result2=mysqli_query($conn,$res2)or die(mysqli_error($conn));
$cn1=mysqli_num_rows($result2);
$res2="UPDATE $tbl_name set ename='$ename',designation='$designation',dob='$dob',phno='$phno',hra='$hra',da='$da',epf='$epf',basic='$basic',leaves='$leaves',total='$total' WHERE eid='$eid'";
$result=mysqli_query($conn,$res2)or die(mysqli_error($conn));
header('location:empupddone.php');
}
}
?>
<?php
$ab1=$_POST['eid'];
$res1="SELECT * FROM $tbl_name where eid='$ab1'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
header("Location:empupdfail.php");
}
else{
while($row=mysqli_fetch_array($result1))
{
$ename=$row['ename'];
$phno=$row['phno'];
$dob=$row['dob'];
$eid=$row['eid'];
$designation=$row['designation'];
$empid=$row['empid'];
$hra=$row['hra'];
$da=$row['da'];
$basic=$row['basic'];
$epf=$row['epf'];
$leaves=$row['leaves'];
$total=$row['total'];
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
#c {position:absolute;top:280px;left:490px;font-family:arial;color:green}
#e {position:absolute;top:320px;left:525px;font-family:arial;color:green}
#f {position:absolute;top:360px;left:535px;font-family:arial;color:green}
#g {position:absolute;top:400px;left:470px;font-family:arial;color:green}
#h {position:absolute;top:440px;left:465px;font-family:arial;color:green}
#i {position:absolute;top:480px;left:477px;font-family:arial;color:green}
#j {position:absolute;top:520px;left:487px;font-family:arial;color:green}
#x {position:absolute;top:560px;left:477px;font-family:arial;color:green}
#l {position:absolute;top:600px;left:511px;font-family:arial;color:green}
#m {position:absolute;top:640px;left:509px;font-family:arial;color:green}
#n {position:absolute;top:680px;left:517px;font-family:arial;color:green}
#a {position:absolute;top:0px;left:1100px}
#b {position:absolute;top:720px;left:580px}
#k {position:absolute;top:720px;left:660px}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<title>Update Employee|Payroll System</title>
</head>
<body>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>Update Employee</h3></div>
<div id="two"><h2>Edit Details:</h2></div>
<form action="" method="post">
<div id="d">Name        :<input type="text" name="ename" value="<?php echo $ename;?>" maxlength="20" size="50"></br></div>
<div id="c">Phone no:<input type="number_format" name="phno" value="<?php echo $phno;?>" maxlength="20" size="50"></br></div>
<div id="e">DOB:<input type="date_create" name="dob" value="<?php echo $dob;?>" maxlength="10" size="50"></div>
<div id="f">Eid:<input type="text" name="eid" value="<?php echo $eid;?>" readonly maxlength="10" size="50"></div>
<div id="g">Designation :<input type="text" name="designation" value="<?php echo $designation;?>" maxlength="10" size="50"></div>
<div id="h">Employer ID :<input type="text" name="empid" value="<?php echo $empid;?>" readonly maxlength="10" size="50"></div>
<div id="i">HRA(in %) :<input type="number_format" name="hra" value="<?php echo $hra;?>" maxlength="10" size="50"></div>
<div id="j">DA(in %) :<input type="number_format" name="da" value="<?php echo $da;?>" maxlength="10" size="50"></div>
<div id="x">EPF(in %) :<input type="number_format" name="epf" value="<?php echo $epf;?>" maxlength="10" size="50"></div>
<div id="l">Basic :<input type="number_format" name="basic" value="<?php echo $basic;?>" maxlength="10" size="50"></div>
<div id="m">Leave :<input type="number_format" name="leaves" value="<?php echo $leaves;?>" maxlength="10" size="50"></div>
<div id="n">Total :<input type="number_format" name="total" value="<?php echo $total;?>" readonly maxlength="10" size="50"></div>
<div id="b"><input type="submit" name="Update" value="Update"></div>
<div id="k"><input type="reset" value="Reset"></div>
</form>
</body>
</html>
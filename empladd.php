<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="employee";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
if(isset($_POST['Submit']))
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
$leaves=0;
$total=(($hra/100)*$basic)+(($da/100)*$basic)+(($epf/100)*$basic)+$basic;
$q="SELECT eid FROM employee WHERE eid='$eid'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo "<center><h2 style='color:red'>Id already exist</h2></center>";
}
else
{
$query="INSERT INTO employee VALUES('$ename','$phno','$dob','$eid','$designation','$empid','$hra','$da','$epf','$basic','$total','$leaves')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
echo "<center><h2 style='color:green'>Details saved!</h2><center>";
}
}
Mysqli_close($conn);
?>
<html>
<head>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h5{color:green;font-family:arial}
#two {position:absolute;top:170px;left:570px}
#d {position:absolute;top:240px;left:530px;font-family:arial;color:green}
#c {position:absolute;top:280px;left:495px;font-family:arial;color:green}
#e {position:absolute;top:320px;left:540px;font-family:arial;color:green}
#f {position:absolute;top:360px;left:485px;font-family:arial;color:green}
#g {position:absolute;top:400px;left:479px;font-family:arial;color:green}
#l {position:absolute;top:480px;left:496px;font-family:arial;color:green}
#p {position:absolute;top:440px;left:482px;font-family:arial;color:green}
#m {position:absolute;top:520px;left:508px;font-family:arial;color:green}
#n {position:absolute;top:560px;left:498px;font-family:arial;color:green}
#o {position:absolute;top:600px;left:531px;font-family:arial;color:green}
#a {position:absolute;top:0px;left:1100px}
#b {position:absolute;top:640px;left:575px}
#k {position:absolute;top:640px;left:655px}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<title>Add Employee|Payroll System</title>
</head>
<body>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>New Employee</h3></div>
<div id="two"><h2>Enter Employee details:</h2></div>
<form action="" method="post">
<div id="d">Name        :<input type="text" name="ename" value="Name" maxlength="20" size="50"></br></div>
<div id="c">Phone No.     :<input type="number_format" name="phno" value="Ph No." maxlength="20" size="50"></br></div>
<div id="e">Dob       :<input type="date_create" name="dob" value="YYYY/MM/DD" maxlength="20" size="50"></br></div>
<div id="f">Designation :<input type="text" name="designation" value="Desig" maxlength="20" size="50"></br></div>
<div id="g">Employee Id          :<input type="text" name="eid" value="Id" maxlength="10" size="50"></div>
<div id="p">Employer Id          :<input type="text" name="empid" value="EmpId" maxlength="10" size="50"></div>
<div id="l">HRA(in %):<input type="number_format" name="hra" value="HRA" maxlength="20" size="50"></div>
<div id="m">DA(in %):<input type="number_format" name="da" value="DA" maxlength="20" size="50"></div>
<div id="n">EPF(in %):<input type="number_format" name="epf" value="EPF" maxlength="20" size="50"></div>
<div id="o">Basic:<input type="number_format" name="basic" value="Basic" maxlength="20" size="50"></div>
<div id="b"><input type="Submit" name="Submit" value="Add"></div>
<div id="k"><input type="reset" value="reset"></div>
</form>
</body>
</html>
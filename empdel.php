<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="employee";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT *  from employee";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
if(isset($_POST['Submit']))
{
$eid=$_POST['eid'];
$sel="select * from employee where eid='$eid'";
$cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==false)
{
echo "<center><h2 style='color:red'>Eid Does not exist</h2></center>";
}
else
{
$sel="delete from employee where eid='$eid'";
$cq=mysqli_query($conn,$sel)or die(mysqli_error($conn));
echo "<center><h2 style='color:green'>Employee Details deleted</h2></center>";
}
}
Mysqli_close($conn);
?><html>
<head>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h4{color:green;font-family:arial}
#two {position:absolute;top:170px;left:570px}
#emp {position:absolute;top:230px;left:550px;}
#b {position:absolute;top:270px;left:550px}
#c {position:absolute;top:320px;left:350px}
#a {position:absolute;top:0px;left:1100px}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<title>Delete Employee|Payroll System</title>
</head>
<body>
<form action="" method="post">
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>Delete Employee</h3></div>
<div id="two"><h2>Enter the Employee Id:</h2></div>
<div id="emp"><input type="number_format" name="eid" value="EmpId" maxlength="20" size="50"></br></div>
<div id="b"><input type="Submit" name="Submit" value="Delete"></div>
<div id="c"><h4>Note: Deleting an Employee means that it will remove all the details of this employee from Database!</h4></div>
</form>
</body>
</html>
<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="employee";
$con=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['eid']))
{
$eid=$_POST['eid'];
$ab="SELECT * FROM employee WHERE eid='$eid'";
$result=mysqli_query($con,$ab)or die(mysqli_error($con));
$cnt=mysqli_num_rows($result);
if($cnt==0)
{
?>
	<style type="text/css">
h2{color:red;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h4{color:blue;font-family:arial}
#two {position:absolute;top:170px;left:550px}
#a {position:absolute;top:0px;left:1100px}
#b {position:absolute;top:230px;left:620px}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<title>View Employee|Payroll System</title>
</head>
<body>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>View Employee</h3></div>
<div id="two"><h2>Invalid Employee Id!</h2></div>
<div id="b"><a href="empdisp.php"><h4>Try Again</h4></a></div>
</body>
</html>
<?php
}
else
{
?>
<title>View Employee|Payroll System</title>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h4{color:green;font-family:arial}
#two {position:absolute;top:170px;left:570px}
#emp {position:absolute;top:230px;left:550px;}
#b {position:absolute;top:270px;left:550px}
#a {position:absolute;top:0px;left:1100px}
.divtable {
	margin-left:25%;
	font-family:Microsoft JhengHei UI Light;
	border:2px solid green;
}
.divtable th{
	font-family:arial;
	
}
.divtable td,th{
	border:1px solid green;
}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>View Employee</h3></div>
<div id="c"><h2>Employee details are:</h2></div>
<table width="483" height="96" border="1" class="divtable">
<tr>
<th width="75">Ename</th>
<th width="75">Phno</th>
<th width="75">Dob</th>
<th width="75">Eid</th>
<th width="99">Designation</th>
<th width="75">EmpId</th>
<th width="75">HRA(in %)</td>
<th width="75">DA(in %)</td>
<th width="75">EPF(in %)</td>
<th width="75">Basic</td>
<th width="75">Leave</td>
<th width="75">Total</td>
</tr>
<?php if($cnt>0)
{
while($row=mysqli_fetch_assoc($result))
{?>
<tr>
<td>&nbsp;<?php echo $row['ename'];?></td>
<td>&nbsp;<?php echo $row['phno'];?></td>
<td>&nbsp;<?php echo $row['dob'];?></td>
<td>&nbsp;<?php echo $row['eid'];?></td>
<td>&nbsp;<?php echo $row['designation'];?></td>
<td>&nbsp;<?php echo $row['empid'];?></td>
<td>&nbsp;<?php echo $row['hra'];?></td>
<td>&nbsp;<?php echo $row['da'];?></td>
<td>&nbsp;<?php echo $row['epf'];?></td>
<td>&nbsp;<?php echo $row['basic'];?></td>
<td>&nbsp;<?php echo $row['leaves'];?></td>
<td>&nbsp;<?php echo $row['total'];?></td>
</tr>
<?php
}
}
}
}
mysqli_close($con);
?>
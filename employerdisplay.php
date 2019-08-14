<?php
session_start();
$host="localhost";
$username="";
$password="";
$db_name="test";
$tbl_name="employer";
$con=mysqli_connect("$host","$username","$password","$db_name")or die("cannot connect");
$select_db=mysqli_select_db($con,$db_name)or die("cannot select DB");
if(isset($_POST['id'])&&isset($_POST['name']))
{
$id=$_POST['id'];
$name=$_POST['name'];
$ab="SELECT name,designation,id,department,cname,cid,bname,bid FROM employer,company,branch WHERE bid=branchid and cid=compid and id='$id' and name='$name'";
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
<title>Employer Login|Payroll System</title>
</head>
<body>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>Employer Login</h3></div>
<div id="two"><h2>Invalid Employer Id!</h2></div>
<div id="b"><a href="emplog.php"><h4>Try Again</h4></a></div>
</body>
</html>
<?php
}
else
{
?>
<title>Employer Home|Payroll System</title>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h4{color:green;font-family:arial;text-align:center;}
#two {position:absolute;top:170px;left:570px}
#emp {position:absolute;top:230px;left:550px;}
#b {position:absolute;top:270px;left:550px}
#a {position:absolute;top:0px;left:1100px}
#d {position:absolute;top:300px;left:550px;color:green}
#e {position:absolute;top:340px;left:550px;color:green}
#f {position:absolute;top:380px;left:550px;color:green}
#g {position:absolute;top:420px;left:550px;color:green}
#h {position:absolute;top:460px;left:550px;color:green}
.divtable {
	margin-left:28%;
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
<div id="a"><h3>Employer Home</h3></div>
<div id="c"><h2>Your details are:</h2></div>
<div id="d"><a href="employerupd1.php"><h4>Update your Details!</a></h4></div>
<div id="e"><a href="empladd.php"><h4>Add new Employee!</a></h4></div>
<div id="f"><a href="empdisp.php"><h4>View Existing Employee!</a></h4></div>
<div id="g"><a href="empupd.php"><h4>Update Existing Employee!</a></h4></div>
<div id="h"><a href="empdel.php"><h4>Remove Existing Employee!</a></h4></div>
<table width="483" height="96" border="1" class="divtable">
<tr>
<th width="75">Name</th>
<th width="99">Designation</th>
<th width="75">Employer Id</th>
<th width="99">Department</th>
<th width="99">Company</th>
<th width="75">Company Id</th>
<th width="75">Branch</td>
<th width="75">Branch Id</td>
</tr>
<?php if($cnt>0)
{
while($row=mysqli_fetch_assoc($result))
{?>
<tr>
<td>&nbsp;<?php echo $row['name'];?></td>
<td>&nbsp;<?php echo $row['designation'];?></td>
<td>&nbsp;<?php echo $row['id'];?></td>
<td>&nbsp;<?php echo $row['department'];?></td>
<td>&nbsp;<?php echo $row['cname'];?></td>
<td>&nbsp;<?php echo $row['cid'];?></td>
<td>&nbsp;<?php echo $row['bname'];?></td>
<td>&nbsp;<?php echo $row['bid'];?></td>
</tr>
<?php
}
}
}
}
mysqli_close($con);
?>
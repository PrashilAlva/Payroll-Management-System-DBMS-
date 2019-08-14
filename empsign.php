<?php
session_start();
$servername="localhost";
$username="";
$password="";
$dbname="test";
$tbl_name="employer";
$conn=mysqli_connect($servername,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
if(isset($_POST['Submit']))
{
$name=$_POST['name'];
$designation=$_POST['designation'];
$id=$_POST['id'];
$department=$_POST['department'];
$bid=$_POST['bid'];
$q="SELECT id FROM employer WHERE id='$id'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
?>
<style type="text/css">
h1{color:red;font-family:arial;}
#three {position:absolute;top:0px;left:540px}
body {
	background-image:url(How-Payroll-Management-system-is-efficient-in-saving-your-Time-and-Money-1.jpg);
	background-repeat:no-repeat;
	background-size:cover;
}
.z img{
	border-radius:70%
}
</style>
<div id="three"><h1>Id Already Exist!</h1></div>
<?php
}
else
{
$query="INSERT INTO employer VALUES('$name','$designation','$id','$department','$bid')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
?>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
#four {position:absolute;top:110px;left:510px}
h6{color:green;font-family:arial;text-align:center;}
#five {position:absolute;top:130px;left:620px}
</style>
<div id="four"><h2>You have signed up successfully!</h2></div>
<div id="five"><a href="home.php"><h6>Go back to Home page!</h6></a></div>
<?php
}
}
Mysqli_close($conn);
?><html>
<head>
<style type="text/css">
h2{color:green;font-family:arial;text-align:center;}
h3{color:green;font-family:arial;text-align:center;}
h5{color:green;font-family:arial}
#two {position:absolute;top:170px;left:570px}
#d {position:absolute;top:240px;left:530px;font-family:arial;color:green}
#c {position:absolute;top:280px;left:490px;font-family:arial;color:green}
#e {position:absolute;top:320px;left:490px;font-family:arial;color:green}
#f {position:absolute;top:360px;left:490px;font-family:arial;color:green}
#j {position:absolute;top:400px;left:505px;font-family:arial;color:green}
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
<title>Employer Signup|Payroll System</title>
</head>
<body>
<div class="z"><a href="home.php"><img src="payroll-management-system-500x500-1-1.jpg" height="100" /></a></br></div>
<div id="a"><h3>Employer Signup</h3></div>
<div id="two"><h2>Enter Your Details:</h2></div>
<form action="" method="post">
<div id="d">Name        :<input type="text" name="name" value="Name" maxlength="20" size="50"></br></div>
<div id="c">Designation :<input type="text" name="designation" value="Desig" maxlength="20" size="50"></br></div>
<div id="e">Employer Id          :<input type="text" name="id" value="Id" maxlength="10" size="50"></div>
<div id="f">Department :<input type="text" name="department" value="Dept" maxlength="10" size="50"></div>
<div id="j">Branch Id :<input type="text" name="bid" value="BranchId" maxlength="10" size="50"></div>
<div id="b"><input type="Submit" name="Submit" value="SignUp"></div>
<div id="k"><input type="reset" value="Reset"></div>
</body>
</html>
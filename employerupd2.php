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
$company=$_POST['company'];
$cid=$_POST['cid'];
$branch=$_POST['branch'];
$bid=$_POST['bid'];
$res2="SELECT * FROM $tbl_name WHERE id='$id'";
$result2=mysqli_query($conn,$res2)or die(mysqli_error($conn));
$cn1=Mysqli_num_rows($result2);
$res2="UPDATE $tbl_name set name='$name',designation='$designation',department='$department',company='$company',cid='$cid',branch='$branch',bid='$bid' WHERE id='$id'";
$result=mysqli_query($conn,$res2)or die(mysqli_error($conn));
header('location:disp.php');
}
?>
<?php
$ab1=$_POST['id'];
$res1="SELECT * FROM $tbl_name where id='$id'";
$result1=mysqli_query($conn,$res1)or die(mysqli_error($conn));
$cn=Mysqli_num_rows($result1);
if($cn==false)
{
header("Location:dsn.php");
}
else{
while($row=mysqli_fetch_array($result1))
{
$name=$row['name'];
$designation=$row['designation'];
$id=$row['id'];
$department=$row['department'];
$comapany=$row['company'];
$cid=$row['cid'];
$branch=$row['branch'];
$bid=$row['bid'];
}
}
?>
<html>
<head>
<title>Edit Data</title>
</head>
<body>
<br/><br/>
<form name="form1" method="post" action="handle.php">
<table border="0">
<tr>
<td>Id</td>
<td><input type="text" name="id" value="<?php echo $id;?>"readonly></td>
</tr>
<tr>
<td>Name</td>
<td><input type="text" name="name" value="<?php echo $name;?>"></td>
</tr>
<tr>
<td>Designation</td>
<td><input type="text" name="designation" value="<?php echo $designation;?>"></td>
</tr>
<tr>
<td>Department</td>
<td><input type="text" name="department" value="<?php echo $department;?>"></td>
</tr>
<tr>
<td>Company</td>
<td><input type="text" name="company" value="<?php echo $company;?>"></td>
</tr>
<tr>
<td>Company id</td>
<td><input type="text" name="cid" value="<?php echo $cid;?>"></td>
</tr>
<tr>
<td>Branch</td>
<td><input type="text" name="branch" value="<?php echo $branch;?>"></td>
</tr>
<tr>
<td>Branch id</td>
<td><input type="text" name="bid" value="<?php echo $bid;?>"></td>
</tr>
<tr>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>


<link rel="stylesheet" href="dbconfig1.css";>
<?php
include("database.php");
$username=$_REQUEST["n3"];
$email=$_REQUEST["n5"];
$password=$_REQUEST["n6"];
$phonenumber=$_REQUEST["n8"];
$address=$_REQUEST["n11"];
$qry="select * from websiteusers where username='$username' and password='$password'";
$execute=mysqli_query($qry);
$num=mysqli_num_rows($execute);
if($num!=1)
{
$data="insert into websiteusers (username,email,password,phonenumber,address) values('$username','$email','$password','$phonenumber','$address')";	
$query=mysqli_query($data);
if($query)
{
?>
<script type="text/javascript">
alert("you are registered");
window.location.href = "index.php";
</script>
<?php
}
else
{	
echo "You Are Not Registered";
}

  }

else 
{
	?>
	<script type="text/javascript">
alert("you are already registered plz sign in");
window.location.href = "index.php";
</script>
<?php
}
?>

<?php
include("database.php");
$productname=$_REQUEST["n1"];
$price=$_REQUEST["n2"];
$quantity=$_REQUEST["n3"];
$data="insert into products(product_name,price,quantity) values ('$productname','$price','$quantity')";
$query=mysqli_query($data,$query);
if($query)
{
     echo   '<script language="javascript">';
     echo 'alert ("THANK YOU")';
     echo '</script>';
// echo "<style='font-weight:bolder;font-size:100%;font-color:red;align=center'>THANK YOU</style>";
// echo '<a href="http://localhost/love/index.php">
// click to visit website</a>';
}
else
{
    	echo "You Are Not Registered";
}
?>

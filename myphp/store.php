<?php
$con = mysqli_connect("localhost","root","","gr");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}

$sql="INSERT INTO gr.contact VALUES('$_POST[name1]','$_POST[add1]','$_POST[add2]','$_POST[email]')";
if (!mysqli_query($con,$sql))
{
die('Error: ' . mysqli_error());
}
echo "1 Record Added";
mysqli_close($con);

?>

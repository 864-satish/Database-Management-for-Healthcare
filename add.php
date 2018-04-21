<?php

$con=mysqli_connect("localhost","root","");
if(!$con)
{
    echo 'Not connected to the server';
}
if(!mysqli_select_db($con,'healthcare'))
{
    echo 'Database not selected';
}


$disease=$_POST['disease'];
$symptoms=$_POST['symptoms'];
$medicines=$_POST['medicines'];
$precautions=$_POST['precautions'];

$sql="INSERT INTO add_table (disease,symptoms,medicines,precautions) VALUES ('$disease','$symptoms','$medicines','$precautions')";

if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted!';
}
else
{
    echo 'Data Inserted!';
}
header("refresh:2; url=add.html");
?>
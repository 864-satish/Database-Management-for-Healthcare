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


$feedback=$_POST['feedback'];

$sql="INSERT INTO feedback_table (feedback) VALUES ('$feedback')";

if(!mysqli_query($con,$sql))
{
    echo 'Feedback Not Submitted!';
}
else
{
    echo 'Thanks for submitting Feedback!';
}
header("refresh:1; url=home.php");
?>
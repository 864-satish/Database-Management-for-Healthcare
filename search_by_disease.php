<?php
session_start();
@mysql_connect("localhost","root","") or die("coluld not connect");
mysql_select_db("healthcare") or die("could not find db!");

$output = '';
//collect 
if(isset($_POST['search'])){
    $searchq =$_POST['search'];
    $_SESSION['search'] = $searchq;
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query=mysql_query("SELECT * FROM disease_table WHERE disease LIKE '%$searchq%' ") or die("could not search");
    $count=mysql_num_rows($query);
    if($count == 0)
    {
        $output='There was no search results!';
    }
    else
    {
        header('location: display_disease_data.php');

    }
}


?>
<html>
<head>
    
    <title>Search</title>
    <link rel="stylesheet" type="text/css" href="add.css">
</head>
    <body bgcolor="#E6E6FA">
    <form action="search_by_disease.php" method="post">
        <input type="text" name="search" placeholder="search Disease">
        <input type="submit" value="Submit">
        
        </form>
    </body>
</html>



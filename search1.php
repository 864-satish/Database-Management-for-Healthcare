<html>
<head>
    <title>Healthcare Data</title>
</head>
<body bgcolor="#E6E6FA">
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
    <tr>
        <th>Id</th>
        <th>Disease</th>
        <th>Symptoms</th>
        <th>Medicines</th>
        <th>Precautions</th>
    </tr>
<?php
//session_start();
@mysql_connect("localhost","root","") or die("coluld not connect");
@mysql_select_db("healthcare") or die("could not find db!");

$output = '';
//collect 
if(isset($_POST['searchVal'])){
    $searchq =$_POST['searchVal'];
    $_SESSION['search'] = $searchq;
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query=mysql_query("SELECT * FROM disease_table WHERE symptoms LIKE '%$searchq%' ") or die("could not search");
    $count=mysql_num_rows($query);
    if($count == 0)
    {
        $output='There was no search results!';
    }
    else
    {
        //header('location: display_disease_data.php');
        while($row=mysql_fetch_assoc($query)){
            /*$Id = $row['id'];
            $Disease = $row['disease'];
            $Symptoms = $row['symptoms'];
            $Medicines = $row['medicines'];
            $Precautions = $row['precautions'];
            $output .= '<div>'.$Id.'  '.$Disease.'  '.$Symptoms.'  '.$Medicines.'  '.$Precautions.'</div>';*/
            echo"<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['disease']."</td>";
            echo "<td>".$row['symptoms']."</td>";
            echo "<td>".$row['medicines']."</td>";
            echo "<td>".$row['precautions']."</td>";
            echo"</tr>";
            

        }
    }
}
//echo($output);

?>
        
        
    </table>
    </body>
</html>

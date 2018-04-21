
<?php

session_start();
//make connection
@mysql_connect('localhost','root','');

//select database
@mysql_select_db('healthcare');
$var_value = $_SESSION['search'];
$sql="SELECT * FROM disease_table WHERE disease='$var_value'";
$records=mysql_query($sql);


?>
<html>
<head>
    <title>Healthcare Data</title>
</head>
<body>
    <table style="width:100%" border="1" cellpadding="1" cellspacing="1">
    <tr>
        <th>Id</th>
        <th>Disease</th>
        <th>Symptoms</th>
        <th>Medicines</th>
        <th>Precautions</th>
    </tr>
<?php

        while($user=mysql_fetch_assoc($records))
        {
            echo"<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['disease']."</td>";
            echo "<td>".$user['symptoms']."</td>";
            echo "<td>".$user['medicines']."</td>";
            echo "<td>".$user['precautions']."</td>";
            echo"</tr>";
            
        }//end of while
?>
    </table>
    </body>
</html>
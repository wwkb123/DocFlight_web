<html>
<head></head>
<body>
<?php
$db_server = "localhost"; 
$db_name = "doc_flight";
$db_user = "root"; 
$db_passwd = ""; 
if(!@mysql_connect($db_server, $db_user, $db_passwd))  
die("cannot connect to the database");
mysql_query("SET NAMES utf8");
if(!@mysql_select_db($db_name))    
die("database cannot be used");

$name=$_POST['name'];
$age=$_POST['age'];
$diagnosis=$_POST['diagnosis'];
$treatments=$_POST['treatments'];
$hospital=$_POST['hospital'];
$process=$_POST['process'];
$comment=$_POST['comment'];

$sql = "insert into treatment (name, age, diagnosis, treatments, hospital, process, comment) values ('$name', '$age', '$diagnosis', '$treatments', '$hospital','$process','$comment')";
        if(mysql_query($sql))
        {
                echo 'succeed!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=treatment_admin.php>';
        }
        else
        {
                echo 'fail!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=treatment_admin.php>';
        }
?>
</body>
</html>
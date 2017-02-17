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

$title=$_POST['title'];
$content=$_POST['content'];
$source=$_POST['source'];
$date=$_POST['date'];
$image=$_POST['image'];
$link=$_POST['link'];

$sql = "insert into blog (title, content, source, date, image, link) values ('$title', '$content', '$source', '$date', '$image','$link')";
        if(mysql_query($sql))
        {
                echo 'succeed!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=admin_article.php>';
        }
        else
        {
                echo 'fail!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=admin_article.php>';
        }
?>
</body>
</html>
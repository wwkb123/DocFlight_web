<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script> 
$(function(){
  $("#header").load("header.html"); 
  $("#footer").load("footer.html"); 
});
</script>
</head>

<body> <div id="header"></div><div class="team_title"><h2>治疗实例</h2></div>
<div class="team_box"><div class="team_line"><div class="team_triangle"></div></div></div>
<div style="background-color:#fff">
<div class="treatment">
<table width='70%' border='0' align='center' class='btm'> 
	<tr><td rowspan="6" width="30%"><img src="http://7xkmak.com2.z0.glb.qiniucdn.com/b7e724ec66114a09a1bc41f9db4cf911?imageView2/1/w/256/h/194"></td>
	<td>病人：</td>
	<td>	吴先生</td>
	</tr><tr>
	<td>年龄：</td>
	<td>46岁</td></tr><tr>
	<td width='20%' >诊断：</td>
	<td>	恶性黑色素瘤</td>
	</tr><tr>
	<td>中方治疗方案：</td>
	<td>截指治疗,切除溃烂手指</td>
	</tr><tr>
	<td><br>美国就诊医院：</td>
	<td><br>匹兹堡大学医院</td>
	</tr><tr>
	<td><br>赴美就诊过程：</td>
	<td><br>美约名医在一天之内帮罗先生找到了匹兹堡大学医...<a href="example1.php">更多</a>
<br><br></td>
	</tr>
</table>
</div>
<div class="treatment">
<table width='70%' border='0' align='center' class='btm'> 
	<tr><td rowspan="6" width="30%"><img src="http://7xkmak.com2.z0.glb.qiniucdn.com/b752ededca3d49fa9e7d9d9f7b0035d1?imageView2/1/w/256/h/194"></td>
	<td>病人：</td>
	<td>梁先生</td>
	</tr><tr>
	<td>年龄：</td>
	<td>46岁</td></tr><tr>
	<td width='20%' >诊断：</td>
	<td>	恶性黑色素瘤</td>
	</tr><tr>
	<td>中方治疗方案：</td>
	<td>截指治疗,切除溃烂手指</td>
	</tr><tr>
	<td><br>美国就诊医院：</td>
	<td><br>匹兹堡大学医院</td>
	</tr><tr>
	<td><br>赴美就诊过程：</td>
	<td><br>梁先生的父亲一年前在北京的一家三甲医院诊断为结...<a href="example1.php">更多</a><br><br></td>
	</tr>
</table>
</div>
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
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT * FROM treatment";
	$total_pages = mysql_num_rows(mysql_query($query));
	
	/* Setup vars for query. */
	$targetpage = "treatment_example.php"; 	//your file name  (the name of this file)
	$limit = 4; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT * FROM treatment ORDER BY id DESC LIMIT $start, $limit";
	$result = mysql_query($sql);
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<center><div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\"> &lt; </a>";
		else
			$pagination.= "<span class=\"disabled\">&lt; </span>";	
		
		//pages	
		if ($lastpage < 7 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
			}
		}
		elseif($lastpage > 5 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">&gt;</a>";
		else
			$pagination.= "<span class=\"disabled\">&gt;  </span>";
		$pagination.= "</div></center>\n";		
	}
?>
	<?php
	$num=mysql_num_rows($result);
		for($i=0;$i<$num;$i++){
	
	$j=mysql_fetch_array($result);
	echo
  "<div class='treatment'><table width='70%' border='0' align='center' class='btm'>
  <tr >".
    "<td colspan='2'><tr><td>病人：</td><td> ".$j['name']."</td></tr><tr><td>年龄：</td><td>". $j['age']."岁</td></tr><tr><td width='20%' >诊断：</td><td>". $j['diagnosis']."</td></tr><tr><td>中方治疗方案：</td><td>". $j['treatments'].
	"</td></tr><tr><td><br>美国就诊医院：</td><td><br>".$j['hospital']."</td></tr><tr><td><br>赴美就诊过程：</td><td><br>".$j['process']."<br><br></td></tr>
 
  </table></div>";
}
	
	?>

<?=$pagination?>



<script src="js/ui-responsive.js"></script>
</div>
<div id="footer"></div>
</body>

</html>

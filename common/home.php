<?php
	include_once "database.php";
	
	$sort="ORDER BY ";
	switch($_GET['sort'])
	{
		case "type": $sort .= "type"; break;
		case "serial": $sort .= "item_serial"; break;
		case "location":$sort .= "location"; break;
		default:
		case "last_update":$sort .= "last_update"; break;
	}
/* 	$sort .= " ".strtoupper($_GET['order']); */
	switch($_GET['order'])
	{
		case "asc": $sort .= " ".strtoupper($_GET['order']);  break; 
		default:
		case "desc": $sort .= " ".strtoupper($_GET['order']); break;
	}

	print $sql_home = "SELECT SQL_CACHE id, type, item_serial, location, last_update FROM inventory_view $sort";
	$result=mySQLQuery($sql_home);
	$count=mysql_num_rows($result);

?>
		<h2>Home</h2>
			
		<div class="line"></div>
			
		<div class="articleBody clear">
			
		<!-- The figure tag marks data (usually an image) that is part of the article -->
<!--
				<div class="figure">
					<a href="http://tutorialzine.com/2010/02/photo-shoot-css-jquery/"><img src="http://tutorialzine.com/img/featured/641.jpg" width="620" height="340" alt="Image one"></a>
				</div>
-->
		<table border="1" id="gradient-style">
			<caption><?php print $p=$_GET['p']; ?></caption>
			<colgroup></colgroup>
			<colgroup span="2" title="title" />
			<thead>
				<tr>
					<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=type&amp;order=asc','article');">Item Type</a></th>
					<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=serial&amp;order=asc','article');">Item Serial</a></th>
					<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=location&amp;order=asc','article');">Location</a></th>
					<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=last_update&amp;order=asc','article');">Last Update</a><b>↑</b>↓</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th scope="col" colspan="4"><?php print $count; ?> items</th>
				</tr>
			</tfoot>
			<?php while($row=mysql_fetch_array($result)){ ?>
			<tbody>
				<tr onclick="javascript:ajaxpage('common/item.php?id=<?php print $row['id']; ?>','article');"">
					<td><?php print $row['type'];?></td>
					<td><?php print $row['item_serial'];?></td>
					<td><?php print $row['location'];?></td>
					<td><?php print $row['last_update'];?></td>
				</tr>
			<?php } /* End While Loop  */ ?>
			</tbody>
		</table>
		
		<div class="line"></div>

		</div>
		
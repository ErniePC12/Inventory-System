<!-- Main nav, styled by targeting "#header nav"; you can have more than one nav element per page -->
<!-- The nav link semantically marks your main site navigation -->
<?php
	include_once "database.php";
	
	$sql_users = "SELECT * FROM inventory_users_view WHERE username='".$_COOKIE["username"]."'";
	
	$result=mySQLQuery($sql_users);
	$menu=mysql_fetch_assoc($result);
	$name = $menu['first_name']." ".$menu['last_name'];


/* echo $_COOKIE["username"]; */
/* echo $HTTP_COOKIE_VARS["username"]; */

?>
<nav class="nav clear">
    <ul>
    	
    	<li><a href="javascript:ajaxpage('common/home.php','article');">Home</a></li>
    	<?php if ($menu['item'] == 'T') { ?>
    	<li><a href="javascript:ajaxpage('common/item.php','article');">Item</a></li>
    	<?php } ?>
    	<?php if ($menu['purchase'] == 'T') { ?>
    	<li><a href="javascript:ajaxpage('common/purchase.php','article');">Purchase</a></li>
    	<?php } ?>
    	<?php if ($menu['disposal'] == 'T') { ?>
    	<li><a href="javascript:ajaxpage('common/disposal.php','article');">Disposal</a></li>
    	<?php } ?>
    	<?php if ($menu['search'] == 'T') { ?>
    	<li><a href=""></a></li>
    	<li><a href="">Search</a></li>
    	<?php } ?>
    	<li><a href=""></a></li>
    	<li><a href="index.php?f=f">Logout</a></li>
    </ul>
</nav>
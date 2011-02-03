<?php
include_once "common/database.php";
if ($_POST['input']=="input")
/* 	if( ( $_POST['myusername']="" || $_POST['mypassword']="" ) ) */
	{
		ob_start();
/* 		include_once "database.php"; */
		
		// username and password sent from form
		$myusername=$_POST['myusername'];
		$mypassword=$_POST['mypassword'];
		
		// To protect MySQL injection
		$myusername = stripslashes($myusername);
		$mypassword = stripslashes($mypassword);
/* 		$myusername = mysql_real_escape_string($myusername); */
/* 		$mypassword = mysql_real_escape_string($mypassword); */
		
		$sql="SELECT * FROM inventory_users WHERE username=\"$myusername\" AND passwd=\"$mypassword\" ";
		$result=mySQLQuery($sql);
		if (!is_string($result)){
		
			// Mysql_num_row is counting table row
			$count=mysql_num_rows($result);
			// If result matched $myusername and $mypassword, table row must be 1 row
			
			if($count==1){
			// Register $myusername, $mypassword and redirect to file "login_success.php"
				session_register("myusername");
				session_register("mypassword"); 
				header("location:index.php");
			}else{$error="Wrong Username or Password";}
			
			ob_end_flush();
		}else{
			$error="Wrong Username or Password";
		}
	}	

?>

<!doctype html>
<!-- simplified doctype works for all previous versions of HTML as well -->

<!-- Paul Irish's technique for targeting IE, modified to only target IE6, applied to the html element instead of body -->
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if (gt IE 6)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<html>
	<head>
	<?php include_once "common/head.php" ?>
<!-- 	<link rel="stylesheet" href="css/tables.css?v=1.0"> -->
	</head>

<!--
<head>

	<script>
    	if (!("autofocus" in document.createElement("input"))) {
    	    document.getElementById("login").focus();
    	}
	</script>
</head>
-->

<!-- If possible, use the body as the container -->
<!-- The "home" class is an example of a dynamic class created on the server for page-specific targeting -->

<body class="home" >

	<!-- ******************************************************************** -->
	<!-- The content below is for demonstration of some common HTML5 elements  -->
	<!-- More than likely you'll rip out everything except header/section/footer and start fresh -->
	
	<!-- First header has an ID so you can give it individual styles, and target stuff inside it -->
	<header id="hd1">
	
		<!-- "hgroup" is used to make two headings into one, to prevent a new document node from forming -->
		<hgroup>
			<h2>US District Court, Southern District of New York</h2>
			<h3>Hardware Inventory System</h3>
		</hgroup>
	
		<!-- Main nav, styled by targeting "#header nav"; you can have more than one nav element per page -->
		<!-- The nav link semantically marks your main site navigation -->
<!--
		<nav class="nav clear">
			<ul>
				<li><a href="javascript:ajaxpage('common/home.php','article');">Home</a></li>
				<li><a href="javascript:ajaxpage('common/item.php','article');">Item</a></li>
				<li><a href="javascript:ajaxpage('common/purchase.php','article');">Purchase</a></li>
				<li><a href="javascript:ajaxpage('common/disposal.php','article');">Disposal</a></li>
			</ul>
		</nav>
-->
		
	</header><!-- #hd1 -->
	
	<section id="main" style="border:0 solid green;">

		<!-- Each section should begin with a new h1 (not h2), and optionally a header -->
		<!-- You can have more than one header/footer pair on a page -->
		<header>
			<h3>&nbsp;</h3>
		</header>
		

		<!-- The new article tag. The id is supplied so it can be scrolled into view. -->

		<div class="articl3" id="articl3" style="position: fixed; left: 20%;  top: 10%; ">
			
			<form name="login_form" method="POST" action="">
				<table width="200" border="1" id="gradient-style" style="width: 20%; position:absolute; right: auto;left: auto;bottom: auto; top: auto;">
					<tr><th colspan="3"><b>Inventory Login</b></th></tr>
					<tr><td width="75">Username</td><td width="10">:</td><td width=""><input name="myusername" size="20" type="text" id="myusername" value=""></td></tr>
					<tr><td width="75">Password</td><td width="10">:</td><td><input name="mypassword" size="20" type="password" id="mypassword" value=""></td></tr>
					<?php if($error){ ?>
					<tr><td style="color:red;" colspan="3"><b><?php print $error; ?></b></td></tr>
					<?php } ?>
					<tr><td colspan="3"><input style="margin:0 1mm;float:right;" type="reset" name="reset" id="reset" value="Reset"/><input style="margin:0 1mm;float:right;" type="submit" name="Submit" value="Login"> <input type="hidden" name="input" value="input"></input> </td></tr>
				</table>
			</form>
			
			
		</div>


	</section><!-- #main -->
	
	<!-- The "aside" element could be a sidebar (outside an article or section) -->
	<!-- Or it could reference other tangentially-related content within an article or section -->
	<!--
<aside id="sidebar">
	<p>Sidebar content</p>
	</aside>
-->
<?php include_once "common/footer.php"; ?>
</body>
</html>
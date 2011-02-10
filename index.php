<?php 
	if ($_GET['f']=="f"){
		session_start();
		session_destroy();
		header("location:login.php");
		setcookie("username", "", time()-1800);
	}
	
	session_start();
	if(!session_is_registered('myusername')){
		header("location:login.php");
	}

	include_once "common/database.php" 


?>
<!doctype html>
<!-- simplified doctype works for all previous versions of HTML as well -->

<!-- Paul Irish's technique for targeting IE, modified to only target IE6, applied to the html element instead of body -->
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if (gt IE 6)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>
<?php include_once "common/head.php" ?>
</head>

<!-- If possible, use the body as the container -->
<!-- The "home" class is an example of a dynamic class created on the server for page-specific targeting -->
<body class="home">
	
	<!-- ******************************************************************** -->
	<!-- The content below is for demonstration of some common HTML5 elements  -->
	<!-- More than likely you'll rip out everything except header/section/footer and start fresh -->
	
	<!-- First header has an ID so you can give it individual styles, and target stuff inside it -->
	<header id="hd1">

		<!-- "hgroup" is used to make two headings into one, to prevent a new document node from forming -->
		<hgroup>
			<h2>US District Court, Southern District of New York </h2>
			<h3>Hardware Inventory System</h3>
		</hgroup>
		<?php include_once "common/menu.php"; ?>
	</header><!-- #hd1 -->

	<section id="main" style="border:0 solid green;">

		<!-- Each section should begin with a new h1 (not h2), and optionally a header -->
		<!-- You can have more than one header/footer pair on a page -->
		<header>
			<h3>&nbsp;</h3>
		</header>
		

		<!-- The new article tag. The id is supplied so it can be scrolled into view. -->

		<div class="article" id="article">
			<?php include_once "common/home.php"; ?>
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
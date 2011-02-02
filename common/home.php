<style>
	
</style>
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
			<colgroup />
			<colgroup span="2" title="title" />
			<thead>
				<tr>
					<th scope="col" onclick=""><a href="javascript:ajaxpage('common/home.php?sort=type&amp;order=asc','article');">Item Type</a></th>
					<th scope="col" onclick=""><a href="javascript:ajaxpage('common/home.php?sort=serial&amp;order=asc','article');">Item Serial</a></th>
					<th scope="col" onclick=""><a href="javascript:ajaxpage('common/home.php?sort=location&amp;order=asc','article');">Location</a></th>
					<th scope="col" onclick=""><a href="javascript:ajaxpage('common/home.php?sort=last_update&amp;order=asc','article');">Last Update</a></th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th scope="col" colspan="4">1 page</th>
				</tr>
			</tfoot>
			<tbody>
					<td>Obi Wan Kenobi</td>
					<td>Light</td>
					<td>Jedi</td>
					<td>Jedi</td>
				</tr>
				<tr>
					<td>Greedo</td>
					<td>South</td>
					<td>Scumbag</td>
					<td>Jedi</td>
				</tr>
				<tr>
					<td>Greedo</td>
					<td>South</td>
					<td>Scumbag</td>
					<td>Jedi</td>
				</tr>
			</tbody>
		</table>
		
		<div class="line"></div>

		</div>
		
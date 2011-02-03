<?php include_once "database.php"; ?>
		<h2>Item</h2>
			
			<div class="line"></div>
			
		<div class="articleBody clear">
			
			<table border="1" id="gradient-style" style="width:400px;">
				<caption></caption>
				<colgroup />
				<colgroup span="2" title="title" /> </colgroup>
				<thead>
<!-- 					<tr> -->
<!-- 						<th scope="col" onclick="" colspan="4" ></th> -->
<!-- 						<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=type&amp;order=asc','article');">Item Type</a></th> -->
<!-- 						<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=serial&amp;order=asc','article');">Item Serial</a></th> -->
<!-- 						<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=location&amp;order=asc','article');">Location</a></th> -->
<!-- 						<th scope="col" onclick="" ><a href="javascript:ajaxpage('common/home.php?sort=last_update&amp;order=asc','article');">Last Update</a></th> -->
<!-- 					</tr> -->
				</thead>
				<tfoot>
					<tr>
						<th scope="col" colspan="4">1</th>
					</tr>
				</tfoot>
				
				<tbody>
					<tr>
						<th scope="col" width="30">Type</th>
						<td colspan="3">
							<select size="1" name="type">
								<option selected="selected"></option>
								<?php print type_menu(); ?>
							</select>
						</td>
					</tr>
					<tr>
						<th scope="col">Serial #:</th>
						<td colspan="3"><input type="text" size="40" maxlength="60"</td>
					</tr>
					<tr>
						<th scope="col">Manufracture:</th>
						<td colspan="3">
							<select size="1" name="type">
								<option selected="selected"></option>
								<?php print manuf_menu(); ?>
							</select>
						</td>
					</tr>
					<tr>
						<th scope="col">Location</th>
						<td>1</td>
						<th scope="col">Room</th>
						<td>3</td>
					</tr>
					<tr>
						<th scope="col">Notes</th>
						<td colspan="3">
							<textarea name="notes" cols="40" rows="5"></textarea>
						</td>
					</tr>
				</tbody>
			</table>
		
		<div class="line"></div>
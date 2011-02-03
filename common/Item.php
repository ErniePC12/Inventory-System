<?php 

	include_once "database.php"; 

	if($_GET['id'])
	{
		$update='T';
		
		print $item_sql = "SELECT * FROM inventory_view WHERE id=".$_GET['id'];
		$result=mysql_fetch_assoc(mySQLQuery($item_sql));
	}


?>
		<h2>Item</h2>
			
			<div class="line"></div>
			
		<div class="articleBody clear">
			
			<table border="1" id="gradient-style" style="width:400px;">
				<caption></caption>
				<colgroup></colgroup>
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
						<th scope="col" colspan="4"><a href="javascript:ajaxpage('common/item.php?id=<?php print $_GET['id']; ?>','article');">Reload</a></th>
					</tr>
				</tfoot>
				
				<tbody>
					<tr>
						<th scope="col" width="30">Type</th>
						<td colspan="3">
							<select size="1" name="type">
							<?php if($update){ ?>
								<option selected="selected" value="<?php print $result['type']; ?>"><?php print $result['type']; ?></option>
								<option>--------------</option>
							<?php }else{ ?>
								<option selected="selected"></option>
							<?php } ?>
								<?php print type_menu(); ?>
							</select>
						</td>
					</tr>
					<tr>
						<th scope="col">Serial #:</th>
						<td colspan="3">
						<?php if($update){ ?>
							<input type="text" size="50" maxlength="60" value="<?php print $result['item_serial']; ?>" />
						<?php }else{ ?>
							<input type="text" size="50" maxlength="60" />
						<?php } ?>
						</td>
					</tr>
					<tr>
						<th scope="col">Manufracture:</th>
						<td colspan="3">
							<select size="1" name="manufracture">
							<?php if($update){ ?>
								<option selected="selected" value="<?php print $result['manufacture']; ?>"><?php print $result['manufacture']; ?></option>
								<option>--------------</option>
							<?php }else{ ?>
								<option selected="selected"></option>
							<?php } ?>
								<?php print manuf_menu(); ?>
							</select>
						</td>
					</tr>
					<tr>
						<th scope="col">Location</th>
						<td>
							<select size="1" name="location">
							<?php if($update){ ?>
								<option selected="selected" value="<?php print $result['location']; ?>"><?php print $result['location']; ?></option>
								<option>--------------</option>
							<?php }else{ ?>
								<option selected="selected"></option>
							<?php } ?>
							<?php print location_menu(); ?>
							</select>
						</td>
						<th scope="col">Room</th>
						<td><input type="text" size="15" maxlength="20" /></td>
					</tr>
					<tr>
						<th scope="col">Notes</th>
						<td colspan="3">
						<?php if($update){ ?>
							<textarea name="notes" cols="40" rows="5"><?php print $result['notes']; ?></textarea>
						<?php }else{ ?>
							<textarea name="notes" cols="40" rows="5"></textarea>
						<?php } ?>
						</td>
					</tr>
				</tbody>
			</table>
		
		<div class="line"></div>
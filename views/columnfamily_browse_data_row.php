<tr>
	<td><?=$key?></td>
	<td><?if ($is_super_cf): echo displaySCFRow($key,$keyspace_name,$columnfamily_name,$value,$is_counter_column); else: echo displayCFRow($key,$keyspace_name,$columnfamily_name,$value,null,$is_counter_column); endif;?></td>
	<?php if ($show_actions_link): ?>
	<td>
		<?if (!$is_counter_column):?><div class="edit_row_icon"></div><div class="float_left"><a href="columnfamily_action.php?action=edit_row&amp;keyspace_name=<?php echo $keyspace_name; ?>&amp;columnfamily_name=<?php echo $columnfamily_name; ?>&key=<?php echo $key; ?>">Edit</a> | </div><? endif; ?>
		<div class="small_horizontal_spacer"></div><div class="delete_row_icon"></div><div class="float_left"><a href="#" onclick="deleteRow('<?php echo $keyspace_name; ?>','<?php echo $columnfamily_name; ?>','<?php echo $key; ?>')">Delete</a></div>
	</td>
	<?php endif; ?>
</tr>
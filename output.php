<?php include('header.php'); ?>
<?php 
	$all = de_get_by_camera($dbconn, 'estatica');
	?>
			<div>
				<table>
<?php	
					foreach ($all as $key => $value):
						foreach ($value as $k => $v):
							?>
							<tr>
								<td><?php echo $k; ?></td>
								<td><?php echo $v; ?></td>
							</tr>
						<?php
						endforeach;
					endforeach;
					echo "Hay <strong>".count($all)."</strong> resultados para la búsqueda";
	?>
				</table>
			</div>
<?php include('footer.php'); ?>
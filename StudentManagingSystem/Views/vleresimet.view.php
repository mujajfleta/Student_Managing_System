
<?php require('partials/head.php'); ?>
 <?php require('partials/nav.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

 <h5> Vleresimet e Detyrave </h5>
 <table class='table table-striped table-hover'>
			<tr>
			<th>ID</th>
			<th>Titulli</th>
			<th>Pershkrim</th>
			<th>Data e dorezimit</th>
			<th>Vleresimi</th>	
<br>
<br>
<?php 
foreach($tasks as $value){
				?>
			<tr>
				<td>
				<?php echo $value['ID']; ?>
				</td>
				<td>
					<?PHP echo $value['titulli'];?>
				</td>
				<td>
					<?PHP echo $value['detajet'];?>
				</td>
				<td>
					<?PHP echo $value['data_dorezimit'];?>
				</td>
			
				<td>
					<?PHP echo $value['vleresimi'];?>
				</td>
			</tr>
			<?php
	}	
			?>	
			</table>


</div>
</center>
</body>
  
  
<?php require('partials/footer.php'); ?>


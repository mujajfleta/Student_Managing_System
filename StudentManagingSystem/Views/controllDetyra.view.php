<?php require('partials/head.php'); ?>
<?php require('partials/navProfesori.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

 <h5> Detajet e detyrave </h5>
 <table class='table table-striped table-hover'>
			<tr>
			<th>ID</th>
			<th>Studenti</th>
			<th>Lenda</th>
			<th>Titulli</th>
			<th>Semestri</th>
			<th>Detajet</th>
			<th>Detyra</th>
			<th>Data e dorezimit</th>
			<th>Vleresimi</th>		
<br>
<?php 
foreach($tasks as $value){
				?>
			<tr>
				<td>
				<?php echo $value['ID']; ?>
				</td>
				<td>
					<?PHP echo $value['emri_studentit'];?>
				</td>
				<td>
					<?PHP echo $value['lenda'];?>
				</td>
				<td>
					<?PHP echo $value['titulli'];?>
				</td>
				<td>
					<?PHP echo $value['semestri'];?>
				</td>
				<td>
					<?PHP echo $value['detajet'];?>
				</td>
				<td>
					<?PHP echo $value['foto'];?>
				</td>
				<td>
					<?PHP echo $value['data_dorezimit'];?>
				</td>
			
				<td>
				<a href="markDetyra?makeid"> <input type="button" Value="Vlereso"  class="btn btn-success btn-sm" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
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
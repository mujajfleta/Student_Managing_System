
<?php require('partials/head.php'); ?>
<?php require('partials/navProfesori.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

 <h5> Vleresimet e Detyrave </h5>
 <table class='table table-striped table-hover'>
			<tr>
			<th>ID</th>
			<th>Studenti</th>
			<th>Titulli</th>
			<th>Pershkrim</th>
			<th>Upload</th>
			<th>Data e dorezimit</th>
			<th>Vleresimi</th>	
            <th>Rregullo</th>	
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
					<?PHP echo $value['emri_studentit'];?>
				</td>
				<td>
					<?PHP echo $value['titulli'];?>
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
					<?PHP echo $value['vleresimi'];?>
				</td>
                <td>
				<a class='btn-floating btn-small waves-effect waves-light red' href='controllDetyra2?id=<?php echo $value['ID']?>'><i class='material-icons' >create</i></a>
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

  
 <?php require('partials/footer.php'); ?>
<?php require('partials/head.php'); ?>

 <?php require('partials/navProfesori.php'); ?>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">


 <?php
 	$make = $_GET[ 'makeid' ];
	$mark=$app['database']->selectDetyraByVleresimi("detyrat_e_dorezuara");
	foreach($mark as $value) {
?>
    
	<legend>Make Result</legend>
	
	<form action="" method="POST" name="makeresult">
	<table class="table table-hover">
    <tr>
       <td><strong> Detyra: </strong></td>
		<td> <?php  $ID=$value['ID']; echo $ID; ?> </td>   
	</tr>
	<tr>
		<td><strong>Titulli:</strong> </td>
		<td><?php  echo $value['titulli']; ?></td>
	</tr>
	<tr>
		<td><strong>Vleresimi: </strong> </td>
		<td> <form name="marks">
				<input type="number" max="100" min="0" name="markIT" id="mark">
	</form> </td>
	</tr>
	<td> <button type="submit">Vlereso</button> </td>
		
		<?php
			}
	
		?>
		<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){
$vleresimi=$_POST['markIT'];
$app['database']->updateVleresimi($ID,$vleresimi);

if (!empty($vleresimi)) {
	echo "
	<br><br>
	<div class='alert alert-success fade in'>
	<a href='vleresimetDetails' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
	<strong>Success!</strong> Result Updated.
	</div>
	";
	} else {
	echo "<br><Strong>Result Updation Faliure. Try Again";

}
}


?>
		</table>
		</form>
</div>
		</div>
		</div>
</div>	
</center>
</body>
 
<?php require('partials/footer.php'); ?>
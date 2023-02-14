<?php require('partials/head.php'); ?>
<?php require('partials/navProfesori.php'); ?>
<body>
<center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="col-md-8" style="position: relative;padding: 20px 20px 20px 20px;">

   <fieldset>
		<legend>Shto Detyren</legend>
			<form method="post" name="AddAssessment">
				<table class="table table-hover" style="margin: left 100px;">
				<tr>
					<td> <strong> Titulli i detyres  </strong> </td>
					<td> <input type="text" name="titulli"> </td>
                </tr>
				<tr>
				    <td> <strong> Pershkrimi i detyres </strong> </td>
				    <td> <textarea name="pershkrimi" rows="5" cols="150"></textarea> </td>
				</tr>
				<tr>
				    <td> <strong> Deadline </strong> </td>
				    <td> <input type="date" name="deadline"> </td>
				</tr>
				<tr>
					<td> <strong> Lenda </strong> </td>
					<td> <textarea name="lenda" rows="5" cols="150"></textarea> </td>
				</tr>
				<td> <button class="btn-floating btn-large waves-effect waves-light red" type="submit"><i class="material-icons" >add</i></button> </td>
				</table>
			</form>
	</fieldset>
</div>
</center>
</body>

 
<?php require('partials/footer.php'); ?>
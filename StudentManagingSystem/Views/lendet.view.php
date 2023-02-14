<?php require('partials/head.php'); ?>

 <?php require('partials/navProfesori.php'); ?>
 <script language="javascript">
    document.title = "Lendet";
</script>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
	<div class="row">
		<div class="col-md-12 text-center">
          <a href="shtoLenden"><button  href="" type="submit" class="btn btn-primary" style="border-radius:10%">Shto Lenden</button></a>
		</div>
	</div>
</div>
<br>
<br>
<div class="row">
<table>
<tr>
<th>Id e Lendes</th>
<th>Emri</th>
<th>Kredite</th>
<th>Semestri</th>
<th>Ndrysho</th>
</tr>
<?php
foreach($tasks as $value){
	?>
<tr>
	<td>
	<?php echo $value['ID_lenda']; ?>
	</td>
	<td>
		<?PHP echo $value['emri'];?>
	</td>
	<td>
		<?PHP echo $value['kredi'];?>
	</td>
	<td>
		<?PHP echo $value['semestri'];?>
	</td>
	<td>
	<a class='btn-floating btn-small waves-effect waves-light red' href='modifikoLenden?id=<?php echo $value['ID_lenda']?>'><i class='material-icons' >create</i></a> 
	</td>
</tr>
<?php
}	
?>
</div>
</center>
</body>
  
<?php require('partials/footer.php'); ?>
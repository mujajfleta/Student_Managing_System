<?php require('partials/head.php'); ?>

 <?php require('partials/nav.php'); ?>
 <script language="javascript">
    document.title = "Lendet";
</script>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
</div>
<br>
<br>
<div class="row">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable" style="padding: 20px 20px 20px 20px;">
<tr>
<th>Id e Lendes</th>
<th>Lenda</th>
<th>Kredite</th>
<th>Semestri</th>
</tr>
<?php
foreach($tasks as $value){
	?>
<tr>
	<td>
	<?php echo $value['ID_lenda']; ?>
	</td>
	<td style="text-decoration: none;">
      <a href="DetyratNgaLenda?emri=<?php echo $value['emri']?>"> <?php echo $value['emri'];?></a>
	</td>
	<td>
		<?PHP echo $value['kredi'];?>
	</td>
	<td>
		<?PHP echo $value['semestri'];?>
	</td>
</tr>
<?php
}	
?>
</div>
</center>
</body>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
  
<?php require('partials/footer.php'); ?>
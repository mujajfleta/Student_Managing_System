<?php require('partials/head.php'); ?>
 <body>
 <?php require('partials/nav.php'); ?>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative ">
  <h5> Detyrat ne baze te lendes </h5>
</div>
<br>
<br>
<div class="row">
<table style="padding-top:25px;">
 <h6>Detyrat ne <?php echo $emri?></h6>
<tr>
<th>Pershkrimi</th>
<th>Titulli</th>
<th>Data e dorezimit</th>
</tr>


<?php
foreach($result as $value){
    ?>
<tr>

	<td>

    <td>

    <td>
      <?php echo $value['pershkrimi']; ?>
    </td>
    <td>
        <?PHP echo $value['titulli'];?>
    </td>
    <td>
        <?PHP echo $value['deadline'];?>
    </td>
</tr>
<?php
}   
?>
</div>
</center>
</body>

<?php require('partials/footer.php'); ?>
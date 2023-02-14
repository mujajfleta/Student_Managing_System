<?php require('partials/head.php'); ?>

 <?php require('partials/navProfesori.php'); ?>

 <body>
<center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px; left: 150px;">
      <div class="row">
<center><form action="" method="post" class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <input name="ID"  type="number" class="validate" value="<?php echo $_GET['id']; ?>" readonly>
          <label for="lenda_id"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="emri_studentit" type="text" type="text" class="validate" value="<?php echo $emri_studentit; ?>" readonly>
          <label for="emriS">Emri i studentit</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="titulli" type="text" class="validate" min="3" max="8" value="<?php echo $titulli; ?>" readonly>
          <label for="credits">Titulli i lendes</label>
        </div>
      </div>
	  <div class="row">
        <div class="input-field col s12">
          <input name="detajet" type="text" class="validate" min="3" max="8" value="<?php echo $detajet; ?>" readonly>
          <label for="credits">Detajet</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="vleresimi" type="number" class="validate" min="5" max="10" value="<?php echo $vleresimi; ?>" required>
          <label for="semestri">Vleresimi</label>
        </div>
      </div>
      <button name="update" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">create</i></button>
    </form></center>
</div>
</div>
</div>
</center>
</body>
 
<?php require('partials/footer.php'); ?>
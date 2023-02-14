<?php require('partials/head.php'); ?>

 <?php require('partials/navProfesori.php'); ?>
 <script language="javascript">
    document.title = "Shto lenden";
</script>
 <body>
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px; left: 150px;">
      <div class="row">
    <center><form action="saveLenda" method="post" class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <input name="ID_lenda" id="lenda_id" type="number" class="validate" value="<?php echo $ID_lenda; ?>" readonly>
          <label for="lenda_id"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="emri" type="text" id="subject_name" type="text" class="validate" required>
          <label for="subject_name">Emri i lendes</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="kredi" id="credits" type="number" class="validate" min="3" max="8" required>
          <label for="credits">Kredite e lendes</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="semestri" id="semestri" type="number" class="validate" min="1" max="6" required>
          <label for="semestri">Semestri</label>
        </div>
      </div>
      <button class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></button>
    </form></center>
  </div>
  </div>
</div>
</center>
<br>
<br>
</body>
  
<?php require('partials/footer.php'); ?>
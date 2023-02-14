<?php require('partials/head.php'); ?>

<?php require('partials/navProfesori.php'); ?>

<script language="javascript">
    document.title = "Ndrysho Lenden";
</script>

<body>
<center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px; left: 150px;">
      <div class="row">
<center><form action="updateLenda" method="post" class="col s12">
    <div class="row">
        <div class="input-field col s12">
          <input name="ID_lenda"  type="number" class="validate" value="<?php echo $_GET['id']; ?>" readonly>
          <label for="lenda_id"></label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="emri" type="text" type="text" class="validate" value="<?php echo $emri; ?>" required>
          <label for="subject_name">Emri i lendes</label>
        </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="kredi" type="number" class="validate" min="3" max="8" value="<?php echo $kredi; ?>" required>
          <label for="credits">Kredite e lendes</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="semestri" type="number" class="validate" min="1" max="6" value="<?php echo $semestri; ?>" required>
          <label for="semestri">Semestri</label>
        </div>
      </div>
      <button name="update" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">create</i></button>
      <button name="delete" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">delete</i></button>
    </form></center>
</div>
</div>
</div>
</center>


<?php require('partials/footer.php')?>
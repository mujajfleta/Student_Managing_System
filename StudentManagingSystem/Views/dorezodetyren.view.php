<?php require('partials/head.php'); ?>
<body>
 <?php require('partials/nav.php'); ?>
<center>
 <form method="POST">
            <div class="card" style="max-width: fit-content;padding: 5px 15px 15px 15px;">
                <h5>Dorezo detyren: </h5>
                <br>
                 <label>Zgjedh lenden e regjistruar</label>
  <select name="lenda" class="browser-default" required>
    <?php 
                foreach($all_lendet as $lenda):
    ?>
                <option value="<?php echo $lenda['ID_lenda'];?>">
                    <?php echo $lenda['emri'];?>
                </option>
            <?php 
               endforeach;
            ?>
  </select>
  <br>
   <label>Zgjedh semestrin</label>
  <select name="semestri"class="browser-default" required>
    <option value="" disabled selected>Semestri</option>
    <option value="Semestri 3">Semestri 1</option>
    <option value="Semestri 3">Semestri 2</option>
    <option value="Semestri 3">Semestri 3</option>
    <option value="Semestri 4">Semestri 4</option>
  </select>
  <br>

  <label>Zgjedh detyren</label>
  <select name="titulli"class="browser-default" required>
    <?php 
                foreach($all_detyrat as $detyra):
    ?>
                <option value="<?php echo $detyra["titulli"];?>">
                <?php echo $detyra["titulli"];?>
                </option>
            <?php 
               endforeach;
            ?>
  </select>
   <br> 
   <!-- <label>Shto dokumentimin</label>
   <input type="file" name="foto" placeholder="Dokumentimi">
  <br>       -->
  <input type="text" name="detajet" placeholder="Detajet e detyres">
  <br>
  <input type="date" name="data_dorezimit" placeholder="Data e dorezimit">
  <br> 
  <button class="btn grey waves-effect" onclick="document.getElementById('file').click()">Ngarko</button>
  <br>
  <br>
  <input type='file' name="foto" id="file" style="display:none" multiple 
       onchange="javascript:updateList()">
<br/>Selected files:
<div id="fileList"></div>
<br>
<br>
  <button name="delete" class="btn red waves-effect">Dorezo</button>
  <br>
  <br>
  <label>Shif detyrat e dorezuara <a href="">ketu</a></label>
  <br>     
  <div>
</form>
</center>
</body>
<script type="text/javascript">
  updateList = function() {
  var input = document.getElementById('file');
  var output = document.getElementById('fileList');

  output.innerHTML = '<ul>';
  for (var i = 0; i < input.files.length; ++i) {
    output.innerHTML += '<li>' + input.files.item(i).name + '</li>';
  }
  output.innerHTML += '</ul>';
}
const select = mdc.select.MDCSelect.attachTo(document.querySelector('.mdc-select'));
select.listen('MDCSelect:change', () => {
  console.log(select.selectedIndex, select.value);
});
</script>
<?php require('partials/footer.php'); ?>
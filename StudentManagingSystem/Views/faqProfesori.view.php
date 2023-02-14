<?php require('partials/head.php'); ?>

<?php require('partials/navProfesori.php'); ?>

<?php require('partials/footer.php')?>

<script language="javascript">
    document.title = "FAQ - Profesor";
</script>
<body>
    <center style="margin-left: 300px; margin-top:100px;">
    <ul class="collapsible" style="text-align: center; width: 1000px;">
    <li>
      <div class="collapsible-header"><i class="material-icons">add_box</i>Si mund te shtoj nje lende si profesor?</div>
      <div class="collapsible-body"><span>Lenda mund te shtohet duke klikuar <a href="shtoLenden">ketu</a>.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment_ind</i>Dikush ka marre fjalekalimin time. A mund ta ndryshoj ate?</div>
      <div class="collapsible-body"><span>Po ju mund te ndryshoni fjalekalimin tuaj duke klikuar ne profil apo mund te klikoni <a href="userprofile">ketu</a>.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment</i>Studenti ishte ne konsultime dhe vendosa te ndryshoj vlersimin e detyres. Ku mund ta beje?</div>
      <div class="collapsible-body"><span>Ndryshimin e vlersimeve te bera me heret mund ta beni <a href="vlersimetProfesor">ketu</a>.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment_turned_in</i>Ku mund ti shikoj detyrat qe mi kane derguar studentet? </div>
      <div class="collapsible-body"><span>Detyrat qe i kane derguar studentet mund ti shihni <a href="controllDetyra">ketu</a>.</span></div>
    </li>
  </ul>
  <script>
    $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>
</center>
</body>


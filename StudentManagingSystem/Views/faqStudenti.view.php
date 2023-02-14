<?php require('partials/head.php'); ?>

<?php require('partials/nav.php'); ?>

<?php require('partials/footer.php')?>

<script language="javascript">
    document.title = "FAQ - Studenti";
</script>
<body>
    <center style="margin-left: 300px; margin-top:100px;">
    <ul class="collapsible" style="text-align: center; width: 1000px;">
    <li>
      <div class="collapsible-header"><i class="material-icons">add_box</i>Si mund ti shoh lendet e regjistruara?</div>
      <div class="collapsible-body"><span>Lenda mund te shtohet duke klikuar <a href="lendetStudent">ketu</a>.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment_ind</i>Dikush ka marre fjalekalimin time. A mund ta ndryshoj ate?</div>
      <div class="collapsible-body"><span>Po ju mund te ndryshoni fjalekalimin tuaj duke klikuar ne profil apo mund te klikoni <a href="userprofile">ketu</a>.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment</i>Ku mund ti shoh detyrat e mia?</div>
      <div class="collapsible-body"><span>Detyrat e juaja mund ti shihni <a href="detyratemia">ketu</a>.</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">assignment_turned_in</i>Ku mund ti shikoj rezultatet e detyrave te mia? </div>
      <div class="collapsible-body"><span>Rezultatet e detyrave te juaja mund ti shihni <a href="vleresimet">ketu</a>.</span></div>
    </li>
  </ul>
  <script>
    $(document).ready(function(){
    $('.collapsible').collapsible();
  });
  </script>
</center>
</body>


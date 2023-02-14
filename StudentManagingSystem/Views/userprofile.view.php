<?php require('partials/head.php'); ?>

  
<body style="background: #eee;">
 <center><div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
    <div class="container">
      <br><br>
      <div class="card"style="position: relative;padding: 20px 20px 20px 20px;">
      <center><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/University_of_Prishtina_logo.svg/2053px-University_of_Prishtina_logo.svg.png" width="150px" height="150px"></center>
      <div class="row">
          <span>Update your profile</span>
    <center><form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input id="username" name="username" type="text" class="validate" value="<?php echo $user_data[0]->username?>" onkeyup="showHint(this.value)" required>
          <label for="email">Username</label>
        </div>
      </div>
      <div class="row">
        <p>Suggestions: <span id="txtHint"></span></p>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" name="password" type="text" class="validate"  required>
          <label for="password">Fjalekalimi</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password_confirm" name="password_confirm" type="text" class="validate" value="" required>
          <label for="password_confirm">FjaleKalimi i ri</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password_confirm" name="password_confirm_new" type="text" class="validate" value="" required>
          <label for="password_confirm">Konfirmo FjaleKalimin e ri</label>
        </div>
      </div>
  
      <button class="btn-floating btn-large waves-effect waves-light red" type="submit">Update</button>
    </form></center>
  </div>
  </div>
</div>
</center>
<br>
<br>
<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>

<?php require('partials/footer.php'); ?>
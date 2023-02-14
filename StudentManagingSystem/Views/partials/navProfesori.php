<nav style="margin: 0 0 0 300px;">
    <div class="nav-wrapper red">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e1/University_of_Prishtina_logo.svg/1200px-University_of_Prishtina_logo.svg.png" class="brand-logo" width="50px" height="50px" style="top: 7px;"><a href="#" class="brand-logo" style="left: 55px;font-size: 20px;">Miresevini ne Profesor Dashboard</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="index.php/logout">Log out</a></li>
      </ul>
    </div>
  </nav>
  <ul id="nav-mobile" class="sidenav" style="transform: translateX(0px);position: fixed;box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);">
        <center><li class="logo"><img src="https://cdn-icons-png.flaticon.com/512/332/332783.png" width="50px" height="50px"></li></center>
         <center><li class="bold"><a class="collapsible-header waves-effect waves-teal" href="userprofile" tabindex="0"><?php echo $user_data[0]->username?></a></li></center>
      <li class="no-padding">
        <center><li>Last visited: <?php echo $last_visited; ?></li></center>
        <ul class="collapsible collapsible-accordion">
 <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="profesor" tabindex="0">Home</a></li>
 <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="lendet" tabindex="0">Lendet</a></li>
 <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="detyratProf" tabindex="0">Detyrat</a></li>
 <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="vleresimetProfesor" tabindex="0">Vleresimet</a></li>
 <li class="bold"><a class="collapsible-header waves-effect waves-teal" href="faqProfesori" tabindex="0">FAQ</a></li>  
 <li class="bold"><a class="collapsible-header waves-effect waves-teal" style="color:#333" href="logout" tabindex="0">Logout</a></li>      
</ul>
      </li>
</ul>
<?php require('partials/head.php'); ?>

<?php require('partials/navProfesori.php'); ?>

<body>
    <center>
<?php
 
 $conn = mysqli_connect("localhost", "root", "root", "projekti");
  
 // Check connection
 if($conn === false){
     die("ERROR: Could not connect. "
         . mysqli_connect_error());
 }
  
 $ID_lenda =  $_REQUEST['ID_lenda'];
 $emri = $_REQUEST['emri'];
 $kredi =  $_REQUEST['kredi'];
 $semestri = $_REQUEST['semestri'];
  
 $sql = "INSERT INTO lendet  VALUES ('$ID_lenda',
     '$emri','$kredi','$semestri')";
  
 if(mysqli_query($conn, $sql)){
     echo "<h4>Lenda u ruajt me sukses!</h4>";

     echo nl2br("\n ID e lendes: $ID_lenda\n Emri i lendes: $emri\n Kredite e lendes: "
         . "$kredi\n Semestri:  $semestri");
 } else{
     echo "ERROR: Hush! Sorry $sql. "
         . mysqli_error($conn);
 }
  
 // Close connection
 mysqli_close($conn);
 ?>
 </center>
 <body>



<?php require('partials/footer.php'); ?>
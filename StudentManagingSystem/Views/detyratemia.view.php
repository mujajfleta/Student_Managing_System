<?php require('partials/head.php'); ?>

 <?php require('partials/nav.php'); ?>
 <body>
 <center>
<div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
<div class="row card">
        <center><label>Detyrat e regjistruara nga profesori</label></center>
    <br>
    <br>
<table style="padding: 20px 20px 20px 20px;">
<tr>
<th>Titulli</th>
<th>Pershkrimi</th>
<th>Lenda</th>
<th>DeadLine</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "projekti");
if ($conn->connect_error) {
die("Lidhja u shkput: " . $conn->connect_error);
}
$sql = "SELECT ID_detyra, titulli, pershkrimi, deadline, lenda FROM detyrat";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["titulli"]. "</td><td>" . $row["pershkrimi"] . "</td><td>"
    . $row["lenda"]. "</td><td>" . $row["deadline"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</div>
</div>
</div>
</center>
<center>
<div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
<div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
<div class="row card">
        <center><label>Detyrat e dorezuara</label></center>
    <br>
    <br>
<table style="padding: 20px 20px 20px 20px;">
<tr>
<th>Emri Studentit</th>
<th>Lenda</th>
<th>Detajet</th>
<th>Data e dorezimit</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "projekti");
if ($conn->connect_error) {
die("Lidhja u shkput: " . $conn->connect_error);
}
$sql = "SELECT ID, emri_studentit, lenda, detajet, data_dorezimit FROM detyrat_e_dorezuara";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["emri_studentit"]. "</td><td>" . $row["lenda"] . "</td><td>"
    . $row["detajet"]. "</td><td>" . $row["data_dorezimit"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</div>
</div>
</div>
</center>
</body>
  
<?php require('partials/footer.php'); ?>
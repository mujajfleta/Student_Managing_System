<?php require('partials/head.php'); ?>

<?php require('partials/navProfesori.php'); ?>
<script language="javascript">
    document.title = "Lenda u ndryshua!";
</script>
<body>
    <center>
        <h4 style="color: green;">Lenda u ndryshua me sukses!</h4>
        <table style="width: 30%;">
            <tr>
                <td>ID e Lendes</td>
                <td><?php echo $_POST['ID_lenda']?></td>
           </tr>
           <tr>
               <td>Emri</td>
               <td><?php echo $_POST['emri']?></td>
           </tr>
           <tr>
               <td>Kredite</td>
               <td><?php echo $_POST['kredi']?></td>
           </tr>
           <tr>
               <td>Semestri</td>
               <td><?php echo $_POST['semestri']?></td>
           </tr>
        </table>

<div class="section no-pad-bot" id="index-banner" style="max-width: 50%;">
 <div class="container"  style="position: relative;padding: 20px 20px 20px 20px;">
	<div class="row">
		<div class="col-md-12 text-center">
          <a href="lendet"><button  href="" type="submit" class="btn btn-primary" style="border-radius:10%">Kthehu tek lendet</button></a>
		</div>
	</div>
</div>

 </center>
 <body>

<?php require('partials/footer.php'); ?>
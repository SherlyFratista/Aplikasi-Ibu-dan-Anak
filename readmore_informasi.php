<?php
require'koneksi.php';
require'auth.php';
$id = $_GET['id'];
$artikel = query("SELECT * FROM artikel_informasi where id = '$id' ");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<style type="text/css">
		.imgArticle {
			width: 50%;
			margin-top: 60px;
		}
		.LabelHeader1 {
			color: #FF5733;
			font-size: 50px;
		}
		.ContainerArticle {
			text-align: left;
			width: 1200px;
			margin-left: 100px;
		}
		.LabelBy{
			font-size: 30px;
			color: #B6B6B6;
		}
		.LabelHeader2 {
			color: #464646;
			font-size: 36px;
		}
		.LabelHeader3 {
			color: #707070;
			font-size: 28px;
		}
	</style>
</head>

<body>

	<nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
        <img src="img/IBU.png" alt="logo" style="width: 50px;">
        </a>
        <div class="d-flex flex-row-reverse bd-highlight">
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#moda1Register">Logout</a>
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#exampleModa1Center">Feedback</a>
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#moda1Register">Bantuan</a>
            <a class="navbar-text" href="#" style="padding: 20px;" data-toggle="moda1" data-target="#exampleModa1Center">Home</a>
        </div>
        </div>
    </nav>

	<?php foreach ($artikel as $a) { ?>
    <div>
    	<center>
    		<div>
    			<img src="img/artikel_informasi/<?= $a['gambar']; ?>" class = "imgArticle">
    		</div>
    	</center>
    	<div class = "ContainerArticle">
    		<div style="margin-top: 55px;">
			<label class ="LabelHeader1"> <b><?= $a['judul']; ?> </b> </label>
    		</div>
    		<div>
    			<label class="LabelBy"> <b> By: <?= $a['pemosting']; ?> | <?= $a['tgl_post']; ?> </b> </label>
    		</div>
    		<div>
			<label style="font-size: 28px;"><?= $a['isi']; ?> </label>
    			</div>
		</div>
	<?php } ?>
    </div>
</body>
</html>
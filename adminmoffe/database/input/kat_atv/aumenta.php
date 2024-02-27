<?php 

	if(isset($_POST['aumenta'])){

		$id_kat_aktividade = $_POST['id_kat_aktividade'];
		$nrn_kat_aktividade= $_POST['nrn_kat_aktividade'];
		$obs_kat_aktividade = $_POST['obs_kat_aktividade'];

		mq("INSERT INTO tb_kat_aktividade VALUES('$id_kat_aktividade', '$nrn_kat_aktividade', '$obs_kat_aktividade') ");

		alert('aumenta', 'kat_atv', 'kat_atv');

	}

 ?>

<div class="x_content animate__animated animate__bounce">

	<!-- start form for validation -->
	<form id="demo-form" data-parsley-validate action="" method="post">
		<label for="id_kat_aktividade">Id kat_aktividade </label>
		<input type="text" id="id_kat_aktividade" class="form-control" name="id_kat_aktividade" required />

		<label for="nrn_kat_aktividade">Naran kat_aktividade</label>
		<input type="nrn_kat_aktividade" id="nrn_kat_info" class="form-control" name="nrn_kat_aktividade" data-parsley-trigger="change" required />

		<label for="obs_kat_aktividade">Obs kat_aktividade</label>
		<input type="text" id="obs_kat_aktividade" class="form-control" name="obs_kat_aktividade" data-parsley-trigger="change" required /> <br>

		<button type="submit" name="aumenta" class="btn btn-primary btn-sm">Aumenta Dadus</button>
	</form>
	<!-- end form for validations -->

</div>
</div>
<?php 

	$id = $_GET['id'];
if(isset($_POST['hadia'])){

		$id_kat_aktividade = $_POST['id_kat_aktividade'];
		$nrn_kat_aktividade= $_POST['nrn_kat_aktividade'];
		$obs_kat_aktividade = $_POST['obs_kat_aktividade'];

		mq("UPDATE tb_kat_aktividade SET
			  id_kat_aktividade='$id_kat_aktividade', 
			  nrn_kat_aktividade='$nrn_kat_aktividade',
			  obs_kat_aktividade='$obs_kat_aktividade'
			  WHERE id_kat_aktividade='$id'
			  ");

		alert('hadia', 'kat_atv', 'kat_atv');

	}

 ?>

<div class="x_content animate__animated animate__bounce">
	<?php 
	$dadus = mfa_mq('tb_kat_aktividade', 'id_kat_aktividade');
	?>

	<!-- start form for validation -->
	<form id="demo-form" data-parsley-validate action="" method="post">
		<label for="id_kat_aktividade">Id kat_aktividade </label>
		<input type="text" id="id_kat_aktividade" class="form-control" value="<?= $dadus['id_kat_aktividade'] ?>" name="id_kat_aktividade" required />

		<label for="nrn_kat_aktividade">Naran kat_aktividade</label>
		<input type="nrn_kat_aktividade" id="nrn_kat_info" class="form-control"  value="<?= $dadus['nrn_kat_aktividade'] ?>" name="nrn_kat_aktividade" data-parsley-trigger="change" required />

		<label for="obs_kat_aktividade">Obs kat_aktividade</label>
		<input type="text" id="obs_kat_aktividade" class="form-control"  value="<?= $dadus['obs_kat_aktividade'] ?>" name="obs_kat_aktividade" data-parsley-trigger="change" required /> <br>

		<button type="submit" name="hadia" class="btn btn-primary btn-sm">Hadia Dadus</button>
	</form>
	<!-- end form for validations -->

</div>
</div>
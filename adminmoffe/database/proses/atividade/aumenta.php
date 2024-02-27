<?php 

if(isset($_POST['aumenta'])){

	$id_atividade = $_POST['id_atividade'];
	$nrn_atividade = $_POST['nrn_atividade'];
	$id_admin = $_POST['id_admin'];
	$id_kat = $_POST['id_kat'];
	$data = $_POST['data'];
	$foto = uploadFoto();
	$info = $_POST['info'];

	// var_dump($_POST['info']);die();
	mq("INSERT INTO tb_aktividade VALUES('$id_atividade', '$nrn_atividade', '$id_admin', '$id_kat', '$data', '$foto', '$info')");

	alert('aumenta', 'atividade', 'aatividade');

}

?>

<div class="x_content animate__animated animate__bounce">

	<!-- start form for validation -->
	<form id="demo-form" data-parsley-validate action="" method="post" enctype="multipart/form-data">
		<label for="id_atividade">Id Atividade </label>
		<input type="text" id="id_atividade" class="form-control" name="id_atividade" required />

		<label for="nrn_atividade">Titulu Atividade</label>
		<input type="nrn_atividade" id="nrn_atividade" class="form-control" name="nrn_atividade" required />

		 <label for="data">Data</label>
		<?php $loron =  date('Y-m-d'); ?>
		<input type="date" id="data" class="form-control" value="<?= $loron ?>" name="data" required /> 

		<label class="control-label col-md-3 col-sm-3 ">Kategoria Atividade</label>
		<select class="form-control" name="id_kat">
			<option>Hili Dadus Kategoria Aktividade</option>

			<?php 
			$query = mq("SELECT * FROM tb_kat_aktividade");
			$no = 1;
			while ($datas = mfa($query)) {
				?>

				<option value="<?= $datas['id_kat_aktividade'] ?>"><?=  $datas['nrn_kat_aktividade'] ?></option>
			<?php } ?>

		</select>

		<label for="foto">Foto</label>
		<input type="file" id="foto" name="foto" class="form-control" required /> 
		 <input type="hidden" name="id_admin" value="<?= $iddddd; ?>" /> 

		<label for="nrn_atividade">Informasaun</label>
		<input type="info" id="info" class="form-control" name="info" required />

		<br>

		<button type="submit" name="aumenta" class="btn btn-primary btn-sm">Aumenta Dadus</button>
	</form>
	<!-- end form for validations -->

</div>
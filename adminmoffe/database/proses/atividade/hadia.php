<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_atividade = $_POST['id_atividade'];
	$nrn_atividade = $_POST['nrn_atividade'];
	$data = $_POST['data'];
	$id_admin = $_POST['id_admin'];
	$id_kat = $_POST['id_kat'];
	$data = $_POST['data'];

	if($_FILES['foto']['error'] === 4){
		$foto = $_POST['img'];
	}else{
		$foto = uploadFoto();
	}

	$info = $_POST['info'];

	mq("UPDATE tb_aktividade SET
		id_aktividade='$id_atividade',
		nrn_aktividade='$nrn_atividade',
		id_admin='$id_admin',
		id_kat_aktividade='$id_kat',
		data_publika='$data',
		images='$foto',
		obs_aktividade='$info'

		WHERE id_aktividade='$id'

		 ");

	alert('hadia', 'atividade', 'haatividade');

}

?>

<div class="x_content animate__animated animate__bounce">

	<?php 
	$dadus = mfa_mq('tb_aktividade', 'id_aktividade');
	?>

	<!-- start form for validation -->
	<form id="demo-form" data-parsley-validate action="" method="post" enctype="multipart/form-data">
		<label for="id_atividade">Id Atividade </label>
		<input type="text" id="id_atividade" value="<?= $dadus['id_aktividade']; ?>" class="form-control" name="id_atividade" required />

		<label for="nrn_atividade">Titulu Atividade</label>
		<input type="nrn_atividade" id="nrn_atividade" class="form-control" value="<?= $dadus['nrn_aktividade']; ?>" name="nrn_atividade" required />

		 <label for="data">Data</label>
		<?php $loron =  date('Y-m-d'); ?>
		<input type="date" id="data" class="form-control" value="<?= $dadus['data_publika']; ?>" name="data" required /> 

		<label class="control-label col-md-3 col-sm-3 ">Kategoria Atividade</label>
		<select class="form-control" name="id_kat">
			<option>Hili Dadus Kategoria Aktividade</option>

			<?php 
			$query = mq("SELECT * FROM tb_kat_aktividade");
			$no = 1;
			while ($datas = mfa($query)) {
				?>

				<option <?php if($dadus['id_kat_aktividade'] == $datas['id_kat_aktividade']) echo 'selected'; ?> value="<?= $datas['id_kat_aktividade'] ?>"><?=  $datas['nrn_kat_aktividade'] ?></option>
			<?php } ?>

		</select>

		<label for="foto">Foto</label>
		<input type="file" id="foto" class="form-control" value="<?= $dadus['images']; ?>" name="foto" />
		<input type="hidden" id="foto" class="form-control" value="<?= $dadus['images']; ?>" name="img" />
		 <input type="hidden" name="id_admin" value="1" /> 

		<label for="nrn_atividade">Informasaun</label>
		<input type="info" id="info" class="form-control" value="<?= $dadus['obs_aktividade']; ?>" name="info" required />

		<br>

		<button type="submit" name="hadia" class="btn btn-primary btn-sm">Hadia Dadus</button>
	</form>
	<!-- end form for validations -->

</div>
<?php 

$id = $_GET['id'];
if(isset($_POST['hadia'])){

	$id_profile = $_POST['id_profile'];
	$nrn_profile = $_POST['nrn_profile'];
	$content_profile = $_POST['content_profile'];

	mq("UPDATE tb_profile SET

		id_profile='$id_profile',
		nrn_profile='$nrn_profile',
		content_profile='$content_profile'
		WHERE id_profile='$id'
		");

	alert('hadia', 'profile', 'aprofile');

}

?>

<div class="x_content animate__animated animate__bounce">

	<?php 
	$dadus = mfa_mq('tb_profile', 'id_profile');
	?>

	<!-- start form for validation -->
	<form id="demo-form" data-parsley-validate action="" method="post">
		<label for="id_profile">Id Profile </label>
		<input type="text" id="id_profile" class="form-control" value="<?= $dadus['id_profile'] ?>" name="id_profile" required />

		<label for="nrn_profile">Naran Profile</label>
		<input type="nrn_profile" id="nrn_profile" class="form-control" name="nrn_profile" value="<?= $dadus['nrn_profile'] ?>" data-parsley-trigger="change" required />

		<label for="content_profile">Content Profile</label>
		<input type="text" id="content_profile" class="form-control" name="content_profile" value="<?= $dadus['content_profile'] ?>" data-parsley-trigger="change" required /> <br>

		<button type="submit" name="hadia" class="btn btn-primary btn-sm">Hadia Dadus</button>
	</form>
	<!-- end form for validations -->

</div>
</div>
<?php 

	if(isset($_POST['aumenta'])){

		$id_profile = $_POST['id_profile'];
		$nrn_profile = $_POST['nrn_profile'];
		$content_profile = $_POST['content_profile'];

		mq("INSERT INTO tb_profile VALUES('$id_profile', '$nrn_profile', '$content_profile') ");

		alert('aumenta', 'profile', 'aprofile');

	}

 ?>

<div class="x_content animate__animated animate__bounce">

	<!-- start form for validation -->
	<form id="demo-form" data-parsley-validate action="" method="post">
		<label for="id_profile">Id Profile </label>
		<input type="text" id="id_profile" class="form-control" name="id_profile" required />

		<label for="nrn_profile">Naran Profile</label>
		<input type="nrn_profile" id="nrn_profile" class="form-control" name="nrn_profile" data-parsley-trigger="change" required />

		<label for="content_profile">Content Profile</label>
		<input type="text" id="content_profile" class="form-control" name="content_profile" data-parsley-trigger="change" required /> <br>

		<button type="submit" name="aumenta" class="btn btn-primary btn-sm">Aumenta Dadus</button>
	</form>
	<!-- end form for validations -->

</div>
</div>
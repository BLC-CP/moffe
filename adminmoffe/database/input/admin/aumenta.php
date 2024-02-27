<?php 

	if(isset($_POST['aumenta'])){

		$id_admin = $_POST['id_admin'];
		$nrn_admin = $_POST['nrn_admin'];
		$sexo = $_POST['sexo'];
		$data_moris = $_POST['data_moris'];
		$hela_fatin = $_POST['hela_fatin'];
		$no_tlp = $_POST['no_tlp'];
		$foto = $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], 'imgUser/'.$foto);
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$level = $_POST['level'];

		mq("INSERT INTO tb_admin VALUES('$id_admin', '$nrn_admin', '$sexo', '$data_moris', '$hela_fatin', '$no_tlp', '$foto', '$username', '$password', '$level') ");

		alert('aumenta', 'admin', 'aadmin');

	}

 ?>

<div class="x_content animate__animated animate__bounce">

	
				<form id="demo-form" data-parsley-validate action="" method="post" enctype="multipart/form-data">
			<div class="col-md-6">
		<label for="id_admin">Id Admin </label>
		<input type="text" id="id_admin" class="form-control" name="id_admin" required />

		<label for="nrn_admin">Naran Admin</label>
		<input type="text" id="nrn_admin" class="form-control" name="nrn_admin" data-parsley-trigger="change" required /><br>

		<label for="sexo">Sexo :</label>
		<input type="radio" id="sexo"  name="sexo" value="Mane" data-parsley-trigger="change" required /> Mane
		<input type="radio" id="sexo"  name="sexo" value="Feto" data-parsley-trigger="change" required /> Feto
		 <br>

		 <label for="data_moris">Data Moris</label>
		<input type="date" id="data_moris" class="form-control" name="data_moris" data-parsley-trigger="change" required />

		<label for="hela_fatin">Hela Fatin</label>
		<input type="text" id="hela_fatin" class="form-control" name="hela_fatin" data-parsley-trigger="change" required />

		<label for="no_tlp">Telefone</label>
		<input type="number" id="no_tlp" class="form-control" name="no_tlp" data-parsley-trigger="change" required />

		
			</div>

			<div class="col-md-6">
				<label for="foto">Foto</label>
				<input type="file" id="foto" class="form-control" name="foto" data-parsley-trigger="change" required />

				<label for="username">Username</label>
				<input type="text" id="username" class="form-control" name="username" data-parsley-trigger="change" required />

				<label for="password">Password</label>
				<input type="text" id="password" class="form-control" name="password" data-parsley-trigger="change" required />
				<input type="hidden" name="level" value="admin" />

				<button type="submit" name="aumenta" class="btn btn-primary btn-sm mt-2">Aumenta Dadus</button>
			</div>
	</form>
	<!-- end form for validations -->

</div>
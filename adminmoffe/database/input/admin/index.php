<div class="container-fluid">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<a href="?page=aadmin" class="btn btn-primary btn-sm">Aumen Dadus</a>
				<ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="#">Settings 1</a>
							<a class="dropdown-item" href="#">Settings 2</a>
						</div>
					</li>
					<li><a class="close-link"><i class="fa fa-close"></i></a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="x_content">
				<div class="row">
					<div class="col-sm-12">
						<div class="card-box table-responsive">

							<table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>No</th>
										<th>Naran</th>
										<th>Sexo</th>
										<th>Data Moris</th>
										<th>Hela Fatin</th>
										<th>Telefone</th>
										<th>Foto</th>
										<th>Level</th>
										<th>Aksaun</th>
									</tr>
								</thead>


								<tbody>
									<?php 
									$query = mq("SELECT * FROM tb_admin");
									$no = 1;
									while ($data = mfa($query)) {
										?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $data['nrn_admin'] ?></td>
											<td><?= $data['sexo'] ?></td>
											<td><?= $data['data_moris'] ?></td>
											<td><?= $data['hela_fatin'] ?></td>
											<td><?= $data['no_tlp'] ?></td>
											<td><img src="imgUser/<?= $data['img_admin'] ?>" width='50px'></td>
											<td><?= $data['level'] ?></td>
											<td>
												<a href="?page=hdadmin&id=<?= $data['id_admin'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
												<a href="?page=hmadmin&id=<?= $data['id_admin'] ?>" onclick="return confirm('Tebes atu hamos dadus <?= $data['nrn_admin'] ?>')" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
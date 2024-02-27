<div class="container-fluid">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<a href="?page=aatividade" class="btn btn-primary btn-sm">Aumen Dadus</a>
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
										<th>Id Atividade</th>
										<th>Titulu</th>
										<th>Data</th>
										<th>Admin</th>
										<th>Kategoria</th>
										<th>Foto</th>
										<!-- <th>Observasaun</th> -->
										<th>Aksaun</th>
									</tr>
								</thead>


								<tbody>
									<?php 
									$query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade, tb_admin WHERE  
										tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade AND 
										tb_aktividade.id_admin=tb_admin.id_admin
										");
									$no = 1;
									while ($data = mfa($query)) {
										?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $data['id_aktividade'] ?></td>
											<td><?= $data['nrn_aktividade'] ?></td>
											<td><?= $data['data_publika'] ?></td>
											<td><?= $data['nrn_admin'] ?></td>
											<td><?= $data['nrn_kat_aktividade'] ?></td>
											<td><img width="70px" src="imgs/<?= $data['images'] ?>"></td>
											<!-- <td><?= $data['obs_aktividade'] ?></td> -->
											<td>
												<a href="?page=haatividade&id=<?= $data['id_aktividade'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
												<a href="?page=hmatividade&id=<?= $data['id_aktividade'] ?>" onclick="return confirm('Tebes atu hamos dadus <?= $data['nrn_aktividade'] ?>')" class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></a>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
<?php 

$id = $_GET['id'];

 $query = mq("SELECT * FROM tb_aktividade WHERE id_kat_aktividade='$id' ");
while ($data = mfa($query)) {

?>
<div class="col-lg-12 mt-2">
	<h3><?= $data['nrn_aktividade'] ?></h3>
<p><?= $data['obs_aktividade'] ?></p>
</div>
<?php } ?>
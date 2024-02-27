<?php 


$query = mq("SELECT * FROM tb_profile");
while ($data = mfa($query)) {

?>
<div class="col-lg-12 mt-2">
	<p class="display-6"><?= $data['nrn_profile'] ?></p>
<p><?= $data['content_profile'] ?></p>
</div>
<?php } ?>

<img src="img/stm.jpg" width="500px" class="mb-2">


<div class="owl-carousel main-carousel position-relative">
    <?php 
    
     $query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade ORDER BY id_aktividade DESC LIMIT 4");
    $no = 1;
    while ($data = mfa($query)) {

 ?>
    <div class="position-relative overflow-hidden" style="height: 500px;">
        <img class="img-fluid h-100" src="adminmoffe/imgs/<?= $data['images'] ?>" style="object-fit: cover;">
        <div class="overlay">
            <div class="mb-2">
                <a class="text-white" href=""><?= $data['data_publika'] ?></a>
            </div>
            <a class="h4 text-center m-0 text-white text-uppercase fonts-weight-normal" href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>">
                <?= $data['nrn_aktividade'] ?>
            </a>
        </div>
    </div>
    <?php } ?>
</div>


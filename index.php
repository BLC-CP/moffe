<!-- Header -->
<?php include 'layout/header.php'; ?>

<!-- Hahu Topbar -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center px-lg-5" style="background: purple;">
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm p-0">
                <ul class="navbar-nav ml-n2">

                    <li class="nav-item">
                        <a class="nav-link text-body small" href="adminmoffe/">Login</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm p-0" style="background: purple">
                <ul class="navbar-nav ml-auto mr-n2">
                    <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-body" href="#"><small class="fab fa-yahoo"></small></a>
                        </li>
                        <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                    </li>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="row align-items-center bg-white py-2 px-lg-5">
    <div class="col-lg-4">
        <a href="#" class="navbar-brand p-0 d-none d-lg-block">
            <h1 class="m-0 display-4 text-uppercase" style="color: purple">MOFFE<span class="text-secondary fonts-weight-normal">-TL</span></h1>
        </a>
    </div>
    <div class="col-lg-8 text-center text-lg-right">
        <img class="img-fluid w-100" style="height: 80px" src="img/moffe.jpg" alt="">
    </div>
</div>
</div>
<!-- Remata Topbar -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-dark py-2 py-lg-0 px-lg-5" style="background: purple">
  <div class="container-fluid p-0">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="?page=home">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=profile">Profile</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            AKTIVIDADE
        </a>
        <ul class="dropdown-menu"style="background:  #64E986" aria-labelledby="navbarDropdown">

            <?php 

            $query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade LIMIT 4");
            $no = 1;
            while ($data = mfa($query)) {

             ?>

             <li><a class="dropdown-item" href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>"><?= $data['nrn_kat_aktividade'] ?></a></li>

         <?php } ?>

     </ul>
 </li>
 <li class="nav-item">
  <a class="nav-link" href="#kontaktu">Kontaktu</a>
</li>
</ul>
</div>
</div>
</nav>
<!-- Navbar End -->


<!-- Hahu Main Slider -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
           <?php include 'layout/loads.php'; ?>
       </div>
       <div class="col-lg-5 px-0">
        <div class="row mx-0">

            <?php 

            $query = mq("SELECT * FROM tb_aktividade JOIN tb_kat_aktividade ON tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade LIMIT 4");
            $no = 1;
            while ($data = mfa($query)) {

                $dprofile = $data['nrn_aktividade'];

                ?> 

                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px">
                        <img class="img-fluid w-90 h-90" src="adminmoffe/imgs/<?= $data['images'] ?>" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase text-center fonts-weight-semi-bold p-2 mr-2" href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>"><?= $data['nrn_kat_aktividade'] ?></a>

                                <!-- <a class="badge badge-success text-uppercase text-center fonts-weight-semi-bold p-2 mr-2" href="?page=aktividade">Le'e Detallu</a> -->
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
</div>
</div>
<!-- Remata Main Slider -->


<!-- Hahu info atual -->
<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <?php 

            $query = mq("SELECT * FROM tb_aktividade ORDER BY id_aktividade DESC LIMIT 1");
            $no = 1;
            while ($data = mfa($query)) {

                $dprofile = $data['nrn_aktividade'];

                ?>
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Informasaun Foun</div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                        style="width: calc(100% - 170px); padding-right: 90px;">
                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="?page=aktividade&idp=<?= $data['id_aktividade'] ?>"><?= $data['nrn_aktividade'] ?></a></div>
                        <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="?page=aktividade&idp=<?= $data['id_aktividade'] ?>"><?= $data['nrn_aktividade'] ?></a></div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
</div>
<!-- Remata info atual -->


<!-- Hahu Featured News Slider  -->
<div class=" container-fluid pt-5 mb-3 mt-5">
    <div class="container">
        <div class="owl-carousel news-carousel carousel-item-4 position-relative">

            <?php 

           $query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade ORDER BY id_aktividade DESC ");
            while ($data = mfa($query)) {

             ?>

             <div class="position-relative overflow-hidden" style="height: 300px;">
                <img class="img-fluid h-100" src="adminmoffe/imgs/<?= $data['images'] ?>" style="object-fit: cover;">
                <div class="overlay">
                    <div class="mb-2">
                        <a class="badge badge-primary text-uppercase fonts-weight-semi-bold p-2 mr-2" href=""><?= $data['nrn_kat_aktividade'] ?></a>
                        <a class="text-white" href=""><small><?= $data['data_publika'] ?></small></a>
                    </div>
                    <a class="m-0 text-white" style="font-size: 10px;" href=""><?= $data['nrn_aktividade'] ?></a>
                </div>
            </div>

        <?php } ?>


    </div>
</div>
</div>
<!-- Remata Featured News Slider -->


<!-- News With Sidebar Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title">
                            <h4 class="m-0 text-uppercase font-weight-bold">INFORMASAUN AKTUAL</h4>
                            <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                        </div>
                    </div>

                    <?php 

                    $query = mq("SELECT * FROM tb_aktividade, tb_kat_aktividade WHERE tb_aktividade.id_kat_aktividade=tb_kat_aktividade.id_kat_aktividade ORDER BY id_aktividade DESC LIMIT 6");
                    $no = 1;
                    while ($data = mfa($query)) {

                     ?>
                     <div class="col-lg-4">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" src="adminmoffe/imgs/<?= $data['images'] ?>" style="object-fit: cover;">
                            <div class="bg-white border border-top-0 p-1">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-bold p-2 mr-2"
                                    href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>"><?= $data['nrn_kat_aktividade'] ?></a>
                                    <a class="text-body" href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>"><small><?= $data['data_publika'] ?></small></a>

                                </div>
                                <a class="h6 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="?page=atividade&id=<?= $data['id_kat_aktividade'] ?>"><?= $data['nrn_aktividade'] ?></a>
                            </div> 
                        </div>
                    </div>

                <?php } ?>
            </div>
        </div>
        

    </div>
</div>
</div>
<!-- News With Sidebar End -->



<!-- Footer Start -->
<div class="container-fluid pt-2 px-sm-0 px-md-4 mt-1" style="background: purple">
    <div class="row py-4" id="kontaktu">
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">lokalizasaun</h5>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Obrigado Barrack, Caicoli-Dili Timor-Leste</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.4249692061467!2d125.56991300701344!3d-8.562106641863753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d01e793a23c1cd3%3A0x26bb67129223c7b3!2sMOFFE-TL!5e1!3m2!1sen!2stl!4v1701783927937!5m2!1sen!2stl" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">No Kontaktu</h5>
            <div class="mb-3">
                <div class="mb-2">
                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href=""></a>
                    <a class="text-body" href=""></a>
                </div>
                <a class="small text-body text-uppercase font-weight-medium" href="">+670 76665212 / 77234339</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Email</h5>
            <a class="small text-body text-uppercase font-weight-medium" href="">movimentufetofoinsae@yahoo.com</a>
            <a class="small text-body text-uppercase font-weight-medium" href="">yasintalujina@yahoo.com</a> 
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Follow Us</h5>
            <div class="d-flex justify-content-start">
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
    <p class="m-0 text-center">&copy; <a href="#">MOFFE-TL</a>. All Rights Reserved.
      Design by <a href="https://htmlcodex.com">fernandeselijario1999@gmail.com</a></p>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

  <!-- Footer -->
  <?php include 'layout/footer.php'; ?>
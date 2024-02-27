
<div class="nav_menu">
  <nav class="nav navbar-nav">
    <ul class=" navbar-right">
      <li class="nav-item dropdown open" style="padding-left: 15px;">
        <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
          <img src="imgUser/<?= $dadmin['img_admin'] ?>" alt=""><?= $dadmin['nrn_admin'] ?>
        </a>
        <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="?page=admin"> Profile</a>
          <a class="dropdown-item"  href="loginpage/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
        </div>
      </li>

    </ul>
  </nav>
</div>
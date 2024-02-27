
<div class="left_col scroll-view animate__animated animate__bounceInLeft">
  <div class="navbar nav_title" style="border: 0;">
    <a href="?page=baranda" class="site_title"><i class="fa fa-paw"></i> <span>MOFFE</span></a>
  </div>

  <div class="clearfix"></div>

  <!-- menu profile quick info -->
  <div class="profile clearfix">
    <div class="profile_pic">
      <img src="imgUser/<?= $dadmin['img_admin'] ?>" alt="..." class="img-circle profile_img">
    </div>
    <div class="profile_info">
      <span>BEMVINDO,</span>
      <h2><?= $dadmin['nrn_admin'] ?></h2>
    </div>
  </div>
  <!-- /menu profile quick info -->

  <br />

  <!-- sidebar menu -->
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
      <h3>General</h3>
      <ul class="nav side-menu">
        <li><a><i class="fa fa-edit"></i> Input <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="?page=profile">Profile</a></li>
            
            <li><a href="?page=kat_atv">Dadus Kat Atividade</a></li>
            <li><a href="?page=admin">Dadus Admin</a></li>
            
          </ul>
        </li>
        <li><a><i class="fa fa-edit"></i> Prosesu <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a href="?page=atividade">Dadus Atividade</a></li>
          </ul>
        </li>

        <li><a><i class="fa fa-edit"></i> Output <span class="fa fa-chevron-down"></span></a>
          <ul class="nav child_menu">
            <li><a target="_blank" href="../">Portal</a></li>
          </ul>
        </li>

      </ul>
    </div>

    </div>
    <!-- /sidebar menu -->

    <!-- /menu footer buttons -->
    <div class="sidebar-footer hidden-small">
      <a data-toggle="tooltip" data-placement="top" title="Settings">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="FullScreen">
        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Lock">
        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
      </a>
      <a data-toggle="tooltip" data-placement="top" title="Logout" href="loginpage/logout.php">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div>
    <!-- /menu footer buttons -->
  </div>
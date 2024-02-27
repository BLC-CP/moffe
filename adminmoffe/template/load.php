<?php 

if(isset($_GET['page'])){

	if($_GET['page'] == 'baranda'){
		include 'template/content.php';
	}

	if($_GET['page'] == 'profile'){
		include 'database/input/profile/index.php';
	}
	if($_GET['page'] == 'aprofile'){
		include 'database/input/profile/aumenta.php';
	}
	if($_GET['page'] == 'hdprofile'){
		include 'database/input/profile/hadia.php';
	}
	if($_GET['page'] == 'hmprofile'){
		include 'database/input/profile/hamos.php';
	}


	if($_GET['page'] == 'kat_atv'){
		include 'database/input/kat_atv/index.php';
	}
	if($_GET['page'] == 'akat_atv'){
		include 'database/input/kat_atv/aumenta.php';
	}
	if($_GET['page'] == 'hakat_atv'){
		include 'database/input/kat_atv/hadia.php';
	}
	if($_GET['page'] == 'hmakat_atv'){
		include 'database/input/kat_atv/hamos.php';
	}


	if($_GET['page'] == 'kat_info'){
		include 'database/input/kat_info/index.php';
	}
	if($_GET['page'] == 'akat_info'){
		include 'database/input/kat_info/aumenta.php';
	}
	if($_GET['page'] == 'hakat_info'){
		include 'database/input/kat_info/hadia.php';
	}
	if($_GET['page'] == 'hmkat_info'){
		include 'database/input/kat_info/hamos.php';
	}


	if($_GET['page'] == 'atividade'){
		include 'database/proses/atividade/index.php';
	}
	if($_GET['page'] == 'aatividade'){
		include 'database/proses/atividade/aumenta.php';
	}
	if($_GET['page'] == 'haatividade'){
		include 'database/proses/atividade/hadia.php';
	}
	if($_GET['page'] == 'hmatividade'){
		include 'database/proses/atividade/hamos.php';
	}


	if($_GET['page'] == 'info'){
		include 'database/proses/info/index.php';
	}
	if($_GET['page'] == 'ainfo'){
		include 'database/proses/info/aumenta.php';
	}
	if($_GET['page'] == 'haainfo'){
		include 'database/proses/info/hadia.php';
	}
	if($_GET['page'] == 'hmainfo'){
		include 'database/proses/info/hamos.php';
	}


	if($_GET['page'] == 'admin'){
		include 'database/input/admin/index.php';
	}
	if($_GET['page'] == 'aadmin'){
		include 'database/input/admin/aumenta.php';
	}
	if($_GET['page'] == 'hdadmin'){
		include 'database/input/admin/hadia.php';
	}
	if($_GET['page'] == 'hmadmin'){
		include 'database/input/admin/hamos.php';
	}


}else{
	include 'template/content.php';
	
}

?>
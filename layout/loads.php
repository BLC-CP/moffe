<?php 

	if(isset($_GET['page'])){

		if($_GET['page'] == 'profile'){
			include 'layout/historia.php';
		}

		if($_GET['page'] == 'atividade'){
			include 'layout/atividade.php';
		}
	
	
		if($_GET['page'] == 'home'){
			include 'layout/carousel.php';
		}


	}else{
		include 'layout/carousel.php';
	}

 ?>
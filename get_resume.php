<?php
	if($_POST['id'] == 1){
		$temp[0] = array('name'=>'Reymar Taleon',
						'address'=>'Mati, Davao Oriental',
						'email'=>'reymartaleon@gmail.com',
						'occupation'=>'Teacher',
						'pic'=>'male.png');
		echo json_encode($temp);
	}else if($_POST['id'] == 2){
		$temp[0] = array('name'=>'Cindy Lasco',
						'address'=>'Mati, Davao Oriental',
						'email'=>'cindylasco@gmail.com',
						'occupation'=>'Teacher',
						'pic'=>'female.png');
		echo json_encode($temp);
	}else if($_POST['id'] == 3){
		$temp[0] = array('name'=>'Kevin John Ayudante',
						'address'=>'Davao City',
						'email'=>'kevin@gmail.com',
						'occupation'=>'Teacher',
						'pic'=>'male.png');
		echo json_encode($temp);
	}else if($_POST['id'] == 4){
		$temp[0] = array('name'=>'Danver Palmiano',
						'address'=>'Mati, Davao Oriental',
						'email'=>'danver@gmail.com',
						'occupation'=>'Teacher',
						'pic'=>'male.png');
		echo json_encode($temp);
	}else if($_POST['id'] == 5){
		$temp[0] = array('name'=>'Eduardo Santiago Jr',
						'address'=>'Tagum City',
						'email'=>'eduardo@gmail.com',
						'occupation'=>'DevOps',
						'pic'=>'male.png');
		echo json_encode($temp);
	}else if($_POST['id'] == 6){
		$temp[0] = array('name'=>'Glester Dionaldo',
						'address'=>'Bukidnon',
						'email'=>'glester@gmail.com',
						'occupation'=>'SQL administrator',
						'pic'=>'male.png');
		echo json_encode($temp);
	}else if($_POST['id'] == 7){
		$temp[0] = array('name'=>'Jeffrey Mocoy',
						'address'=>'Davao City',
						'email'=>'jeffrey@gmail.com',
						'occupation'=>'Teacher',
						'pic'=>'male.png');
		echo json_encode($temp);
	}
?>
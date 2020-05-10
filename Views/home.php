<?php 
	if(isset($_SESSION['name'])){
		echo $_SESSION['name'] . 'da dang nhap';
	}else{
		echo 'Chua dang nhap';
	}

 ?>
 <a href="index.php?mod=auth&act=logout">Logout</a>
 <a href="index.php?mod=auth&act=login">Login</a>

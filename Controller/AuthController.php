<?php
	require_once 'Models/User.php';
	require_once 'Controller/BaseController.php';

	class AuthController extends BaseController{
		protected $user;
		function __construct(){
			$this->user = new User();
		}

		public function login(){
			if(!isset($_POST['btn_submit'])){
				$this->view('auth/login.php');
			}else{
				$email = $_POST['email'];
				$password = $_POST['password'];

				$users = $this->user->where(['email' => $email, 'password' => $password]);
				if(count($users) ==0){
					echo "<script>alert('Dang nhap khong thanh cong');location.href='index.php?mod=auth&act=login'</script>";
					
					
				}else{
					$user = $users[0];
					$_SESSION['name'] = $user['name'];
					$this->redirect('index.php?mod=post&act=index');
				}
			}
		}

		public function logout(){
			unset($_SESSION['name']);
			$this->redirect('index.php?mod=post&act=index');
		}

		public function register(){
			if(!isset($_POST['btn_submit'])){
				$this->view('auth/register.php');
			}else{
				
				$name = $_POST['name'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$users = $this->user->where(['name' => $name,'email' => $email, 'password' => $password]);
				if(count($users) ==0){
					echo "<script>alert('Dang ky thanh cong');location.href='index.php?mod=auth&act=login'</script>";
					
					
				}else{
					$user = $users[0];
					$_SESSION['name'] = $user['name'];
					$this->redirect('index.php?mod=auth&act=login');
				}
			}
		}

		public function home(){
			$this->view('Theme/home.php');
		}

		public function blog(){
			$this->view('Theme/blog.php');
		}
	}
 ?>
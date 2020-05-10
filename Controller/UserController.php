<?php 
	require_once 'Models/Post.php';
	require_once 'Models/Category.php';
	require_once 'Models/User.php';

	class UserController{
		public $user_model;
		public function __construct(){
		 	$this->user_model = new User();
		 }

		 public function index(){
		 	$users = $this->user_model->getAll();
		 	// require_once ('Views/user/list.php');
		 	require_once 'Views/blank_user.php';
		 }

		 public function detail(){
		 	$id = $_GET['id'];
			$user = $this->user_model->find($id);
			require_once "Views/user/detail.php";
		}
		 public function create(){
			
			$user_model = new User();
			$users = $user_model->getAll();

			
			require_once "Views/user/add.php";
		}

		public function edit(){
			$id = $_GET['id'];
			$user_model = new User();
			$users = $user_model->getAll();
			
			$user = $this->user_model->find($id);
			require_once "Views/user/edit.php";
		}

		public function update(){
			$id = $_GET['id'];
			
			$data = $_POST;
			$user_model = new User();
			$result = $user_model->update($data,$id);

			if($result){
				
				echo "<script>alert('Update thành công');location.href='index.php?mod=user&act=index'</script>";
			}else{
				echo "<script>alert('Update thất bại);location.href='index.php?mod=user&act=edit'</script>";
				
			}
		 }

		public function destroy(){
			$id = $_GET['id'];
			$result = $this->user_model->delete($id);
			if($result){
				echo "<script>alert('Xóa thành công');location.href='index.php?mod=user&act=index'</script>";
			}else{
				echo "<script>alert('Xóa không thành công');location.href='index.php?mod=user&act=index'</script>";
			}
			header("Location: index.php?mod=user&act=index");
		}

		public function store(){
			$data = $_POST;
			$user_model = new User();
			$result = $user_model->add($data);
			if($result){
				echo "<script>alert('Thêm thành công');location.href='index.php?mod=user&act=index'</script>";
			}else{
				echo "<script>alert('Thêm thất bại');location.href='index.php?mod=user&act=create'</script>";
			}

			header("Location: index.php?mod=user&act=index");
		}
	}
 ?>
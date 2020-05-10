<?php 
	require_once 'Models/Post.php';
	require_once 'Models/Category.php';
	require_once 'Models/User.php';

	class CategoryController{
		public $category_model;
		 function __construct(){
		 	$this->category_model = new Category();
		 }

		 public function index(){
		 	$categories = $this->category_model->getAll();
		 	require_once 'Views/blank_category.php';
		 }

		 public function detail(){
		 	$id = $_GET['id'];
		 	$category = $this->category_model->find($id);
		 
		 	require_once ('Views/category/detail.php');
		 }

		 public function create(){

			$category_model = new Category();
			$categories = $category_model->getAll();

			require_once "Views/category/add.php";
		}

		public function edit(){
			$id = $_GET['id'];
			$category_model = new Category();
			$categories = $category_model->getAll();

			$category = $this->category_model->find($id);
			require_once "Views/category/edit.php";
		}

		public function update(){
			$id = $_GET['id'];
			$data = $_POST;
			$category_model = new Category();

			
			$result = $category_model->update($data,$id);
			if($result){
				echo "<script>alert('Update thành công');location.href='index.php?mod=category&act=index'</script>";
			}else{
				echo "<script>alert('Update không thành công');location.href='index.php?mod=category&act=edit'</script>";
			}
		}

		public function destroy(){
			$id = $_GET['id'];
			$result = $this->category_model->delete($id);
			if($result){
				setcookie("success", "Xoa thanh cong", time()+3);
			}else{
				setcookie("fail", "Xoa khong thanh cong", time()+3);
			}
			header("Location: index.php?mod=category&act=index");
		}

		public function store(){
			$data = $_POST;
			$category_model = new Category();
			$result = $category_model->add($data);
			if($result){
				echo "<script>alert('Thêm thành công');location.href='index.php?mod=category&act=index'</script>";
			}else{
				echo "<script>alert('Thêm thất bại');location.href='index.php?mod=category&act=create'</script>";
			}

			header("Location: index.php?mod=category&act=index");
		}
	}
 ?>
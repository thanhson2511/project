<?php 
	require_once 'Models/Post.php';
	require_once 'Models/Category.php';
	require_once 'Models/User.php';

	class PostController{
		private $post_model;
		public function __construct(){
			$this->post_model = new Post();
		}
		public function index(){
			$post_model = new Post();
			$posts = $post_model->getAll();
			require_once 'Views/blank_post.php';
		}

		public function create(){
			$user_model = new User();
			$category_model = new Category();
			$categories = $category_model->getAll();
			$users = $user_model->getAll();
			require_once "Views/posts/add.php";
		}

		public function detail(){
			$id = $_GET['id'];
			$post = $this->post_model->find($id);
			require_once "Views/posts/detail.php";
		}

		public function edit(){
			$id = $_GET['id'];
			$user_model = new User();
			$category_model = new Category();
			$categories = $category_model->getAll();
			$users = $user_model->getAll();
			$post = $this->post_model->find($id);
			require_once "Views/posts/edit.php";
		}

		public function update(){
			$id = $_GET['id'];
			$data = $_POST;
			$post_model = new Post();
			$result = $post_model->update($data,$id);
			if($result){
				echo "<script>alert('Update thành công');location.href='index.php?mod=post&act=index'</script>";
			}else{
				echo "<script>alert('Update không thành công');location.href='index.php?mod=user&act=edit'</script>";
			}
		}

		public function destroy(){
			$id = $_GET['id'];
			$result = $this->post_model->delete($id);
			if($result){
				setcookie("success", "Xoa thanh cong", time()+3);
			}else{
				setcookie("fail", "Xoa khong thanh cong", time()+3);
			}
			header("Location: index.php?mod=post&act=index");
		}

		public function store(){
			$data = $_POST;
			$post_model = new Post();
			$data["content"] = htmlspecialchars($data["content"]);
			$result = $post_model->add($data);
			if($result){
				echo "<script>alert('Thêm thành công');location.href='index.php?mod=post&act=index'</script>";
			}else{
				echo "<script>alert('Thêm thất bại');location.href='index.php?mod=post&act=create'</script>";
			}

			header("Location: index.php?mod=post&act=index");
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog</title>

  <!-- Custom fonts for this template-->
  <link href="Public/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="Public/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Blog Thanh Son</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <?php include 'Views/include/navbar.php'; ?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       <?php require_once 'Views/include/header.php'; ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

           <div class="container">
       <h3 align="center">Update New Post</h3>
    <hr>
        <form action="index.php?mod=post&act=update&id=<?php echo $post['id']; ?>" method="POST" role="form" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" name="title" value="<?php echo $post['title']; ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control"  name="description" value="<?php echo $post['description']; ?>">
            </div>

             <div class="form-group">
                <label for="">Noi dung</label>
                <textarea class="form-control" name="content" value=""><?php echo $post['content']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Ảnh</label>
                <textarea class="form-control" name="thumbnail" value=""><?php echo $post['thumbnail']; ?></textarea>
            </div>

            <div class="form-group">
                <label for="">Danh muc</label>
                <select class="form-control" name ="category_id">
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category['id']; ?>" <?php if($category['id'] ==$post['category_id']) echo "selected" ?> > <?php echo $category['name']; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label>User</label>
                <select class="form-control" name="user_id">
                <?php foreach ($users as $user) {?>
                        <option value="<?php echo $user['id']; ?>" <?php if($user['id'] ==$post['user_id']) echo "selected" ?>><?php echo $user['name']; ?></option>
                <?php } ?>
                    
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    
    
    </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php 
        require_once 'Views/include/footer.php';
       ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php?mod=auth&act=login">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="Public/backend/vendor/jquery/jquery.min.js"></script>
  <script src="Public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="Public/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="Public/backend/js/sb-admin-2.min.js"></script>

</body>

</html>

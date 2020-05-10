<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form method="POST" action="index.php?mod=auth&act=login" style="margin: auto;">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container" style="">


<div class="row" >
    <aside class="col-sm-4" style="margin: auto;">

<div class="card">
<article class="card-body">
<a href="index.php?mod=auth&act=register" class="float-right btn btn-outline-primary">Đăng ký</a>
<h4 class="card-title mb-4 mt-1" href="">Đăng nhập</h4>
     <form>
    <div class="form-group">
        <label>Nhập email của bạn</label>
        <input name="email" class="form-control" placeholder="Nhập Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group">
        
        <label name="password">Nhập password của bạn</label>
        <input class="form-control" placeholder="Nhập password" type="password" name="password">
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Save password </label>

    </div>
    <div><a href='index.php?mod=auth&act=home'>Quay lại trang chủ</a></div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button name="btn_submit"type="submit" class="btn btn-primary btn-block"> Đăng nhập  </button>
    </div> <!-- form-group// -->                                                           
</form>
</article>
</div>
</form>
</body>
</html>
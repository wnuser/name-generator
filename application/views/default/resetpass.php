<!DOCTYPE html>
<html lang="en">


<head>
<title>Admindek | Admin Template</title>




<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
<meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
<meta name="author" content="colorlib" />

<link rel="icon" href="https://colorlib.com//polygon/admindek/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url('files/bower_components/bootstrap/css/bootstrap.min.css') ?>">

<link rel="stylesheet" href="<?= base_url('files/assets/pages/waves/css/waves.min.css') ?>" type="text/css" media="all"> 
<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/icon/feather/css/feather.css') ?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/icon/themify-icons/themify-icons.css') ?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/icon/icofont/css/icofont.css') ?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/icon/font-awesome/css/font-awesome.min.css') ?>">

<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/style.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('files/assets/css/pages.css') ?>">
</head>
<body themebg-pattern="theme1">

<div class="theme-loader">
<div class="loader-track">
<div class="preloader-wrapper">
<div class="spinner-layer spinner-blue">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-red">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-yellow">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
<div class="spinner-layer spinner-green">
<div class="circle-clipper left">
<div class="circle"></div>
</div>
<div class="gap-patch">
<div class="circle"></div>
</div>
<div class="circle-clipper right">
<div class="circle"></div>
</div>
</div>
</div>
</div>
</div>

<section class="login-block">

<div class="container-fluid">
<div class="row">
<div class="col-sm-12">

<form class="md-float-material form-material" method="post" action="<?=  base_url('Auth/resetpassword') ?>">
<div class="text-center">
<img src="../files/assets/images/logo.png" alt="logo.png">
</div>
<div class="auth-box card">
<div class="card-block">
<div class="row m-b-20">
<div class="col-md-12">
<h3 class="text-center txt-primary">Reset Password </h3>
</div>
</div>

<p class="text-muted text-center p-b-5">Reset Your Password </p>


<div class="form-group form-primary">
<input type="password" name="password" class="form-control" required="">
<span class="form-bar"></span>
<label class="float-label">Old Password</label>
</div>
<div class="row">
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="password" name="npassword" class="form-control" required="">
<span class="form-bar"></span>
<label class="float-label">New Password</label>
</div>
</div>
<div class="col-sm-6">
<div class="form-group form-primary">
<input type="password" name="confirm-password" class="form-control" required="">
<span class="form-bar"></span>
<label class="float-label">Confirm Password</label>
</div>
</div>
</div>

<div class="row m-t-30">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Update</button>
</div>
<center>
<?php if( $confirm_not_match=  $this->session->flashdata('confirm_not_match')){
	?>
    <div class="alert alert-danger">
    	<?= $confirm_not_match ?>
    	<button class="btn btn-default" data-dismiss="alert">x</button>
    </div>
	<?php
} ?>
<?php if( $old_not_match=  $this->session->flashdata('old_not_match')){
	?>
    <div class="alert alert-danger">
    	<?= $old_not_match ?>
    	<button class="btn btn-default" data-dismiss="alert">x</button>
    </div>
	<?php
} ?>
</center>
</div>
<hr />
<div class="row">


</div>
</div>
</div>
</form>

</div>

</div>

</div>

</section>

<?php include"asset/footer.php"; ?>
</body>


</html>

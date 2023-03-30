<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Rental Agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 20px ;">
<h1>Customer Login Form</h1>

<?php if($user=$this->session->flashdata('msg')):
$user_class =$this->session->flashdata('msg')
    
    ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert <?= $user_class ?>">
            <?= $user; ?>
        
        </div>

        </div>
</div>
<?php endif; ?>



<form method="post" name="Customer Login Form" class="was-validate" action="<?php echo base_url().'Customer/C_login/login_customer';?>">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Username">Username<Strong>*</strong></label>
    <input type="text" class="form-control" id="username" placeholder="Enter Your Username" name="username" value="<?php echo set_value('username'); ?>" required >
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('username'); ?>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Password">Password<Strong>*</strong></label>
    <input type="password" class="form-control" id="password" placeholder="Enter Your Password" name="password" value="<?php echo set_value('password'); ?>" required>   
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('password'); ?>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<a href=" <?php echo base_url().'Customer/C_registration/registration' ?> " type="submit"class="btn btn-primary"> Customer Sign Up</a>
</div>
</div>
</div>


<?php echo form_submit(['type'=>'submit', 'class'=>'btn btn-primary','value'=>'Submit']); ?>
<a href=" <?php echo base_url().'index.php/Home/index' ?> " type="submit"class="btn btn-primary">Cancel</a>
</form>

</div>

  


</body>
</html>

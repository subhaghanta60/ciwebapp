<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="margin-top: 20px ;">
<h1>Agency Registration Form</h1>

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


<form method="post" name="Customer Registration Form"  action="<?php echo base_url().'Agency/A_Registration/createdata'; ?>" >

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
    <label for="Name"> Name<Strong>*</strong></label>
    <input type="text" class="form-control" id="name" placeholder="Enter Your Name"  name="name" value="<?php echo set_value('name'); ?>" required>   
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('name'); ?>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Phone">Phone Number<Strong>*</strong></label>
    <input type="number" class="form-control" id="phone" placeholder="Enter Your Phone" name="phone" value="<?php echo set_value('phone'); ?>" required>    
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('phone'); ?>
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


<button type="submit" class="btn btn-primary" value="register">Submit</button>

<a href=" <?php echo base_url().'index.php/Home/index' ?> " type="submit"class="btn btn-primary">Cancel</a>
</form>

</div>

  


</body>
</html>

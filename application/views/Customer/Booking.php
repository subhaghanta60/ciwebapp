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
<h1>Booking  Form</h1>

<?php if($user=$this->session->flashdata('user')):
$user_class =$this->session->flashdata('user_class')
    
    ?>
    <div class="row">
        <div class="col-lg-6">
            <div class="alert <?= $user_class ?>">
            <?= $user; ?>
        
        </div>

        </div>
</div>
<?php endif; ?>



<form method="post" name="Customer Registration Form" class="was-validate" action="<?php echo  base_url().'Customer/C_Booking/booking_register/'.$car['vehicalid'] ?>">
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Vehical Model "> Car Model <Strong>*</strong></label>
    <input type="text" class="form-control" id="vehical_model" name="vehical_model" value="<?php echo set_value('model',$car['vehical_model']); ?>" required >
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Vehical  Number"> Car Number<Strong>*</strong></label>
    <input type="text" class="form-control" id="vehical_number" name="vehical_number" value="<?php echo set_value('vehical_number',$car['vehical_number']); ?>" required >
</div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Booking Date">Booking Date<Strong>*</strong></label>
    <input type="date" class="form-control" id="booking_date" placeholder="Enter Your Booking Date" name="booking_date" value="<?php echo set_value('booking_date'); ?>"required>   
</div>
</div>

<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('booking_date'); ?>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="day">No of Days for Rent<Strong>*</strong></label>
    <input type="number" class="form-control" id="day" placeholder="Enter  how many days we want to take Rent" name="day" value="<?php echo set_value('day'); ?>"required>   
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('booking_date'); ?>
</div>
</div>



<?php echo form_submit(['type'=>'submit', 'class'=>'btn btn-primary','value'=>'Submit']); ?>
<button type="submit" class="btn btn-primary" value="register">Rent </button>
<a href=" <?php echo base_url().'Customer/C_Carlist/AvalableCarlist' ?> " type="submit"class="btn btn-primary">Cancel</a>
</form>

</div>

  


</body>
</html>

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
<h1>List Your Car</h1>

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


<form method="post" name="Agency ListCar Form"  action="<?php echo base_url().'Agency/A_Carlist/listing'; ?>" >

<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Vehical Model">Vehical Model<Strong>*</strong></label>
    <input type="text" class="form-control" id="vehical_model" placeholder="Enter Your Car Model" name="vehical_model" value="<?php echo set_value('vehical_model'); ?>" required >
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('vehical_model'); ?>
</div>
</div>



<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Vehical Number"> Vehical Number<Strong>*</strong></label>
    <input type="text" class="form-control" id="vehical_number" placeholder="Enter Your Car Number"  name="vehical_number" value="<?php echo set_value('vehical_number'); ?>" required>   
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('vehical_number'); ?>
</div>
</div>

<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Seating Capacity">Seating Capacity<Strong>*</strong></label>
    <input type="number" class="form-control" id="setting_capacity" placeholder="Enter Your car's seating Capacity" name="setting_capacity" value="<?php echo set_value('setting_capacity'); ?>" required>    
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('setting_capacity'); ?>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="Rent">Rent Per day<Strong>*</strong></label>
    <input type="number" class="form-control" id="rent_per_day" placeholder="Enter Your Pascar's Rent Per day" name="rent_per_day" value="<?php echo set_value('rent_per_day'); ?>" required>   
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('rent_per_day'); ?>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <select name="Booking_status" id="Booking_status" class="form-control input-lg">
        <option  >Select Status</option>
        <option >0</option>
        <option>1</option>
</select>
</div>
</div>
<div class="col-lg-6" style="margin-top:40px;">
 <?php echo form_error('Booking_status'); ?>
</div>
</div>


<button type="submit" class="btn btn-primary" value="register">Submit</button>

<a href=" <?php echo base_url().'Agency/A_Carlist/Carlist' ?> " type="submit"class="btn btn-primary">Cancel</a>
</form>

</div>

  


</body>
</html>

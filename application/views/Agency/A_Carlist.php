
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  
  <h1>All Car Details</h1>
  
  <div class="container" style="padding-top: 10px;">
    <div class ="col-md-12">
      <?php
         $success = $this->session->userdata('success');
         if($success != ""){
          ?>
          
          <div class ="alert alert-success"> <?php echo $success ;?>  </div>
          <?php

         }
         ?>

      <?php
         $failure = $this->session->userdata('failure');
         if($failure != ""){
          ?>
          
          <div class ="alert alert-success"> <?php echo $failure ;?>  </div>
          <?php

         }
        ?>


    </div>

</div>

<div class="row">
<div class="col-6">
    <h3>To Add Car details</h3>
    <a href="<?php echo base_url().'Agency/A_Carlist/listcar' ?> " class= "btn btn-primary" > Create </a>
  </div>
</div>

<p>Booking Status 0 means Not Available to Book, Booking Status 1 means Available to  book, Booking Status 2 means already Book </p>
 
  <table class="table">
    <thead>
      <tr>
        <th>Vehical Model</th>
        <th>Vehical Number</th>
        <th>Seating Capacity</th>
        <th>Rent Per Day</th>
        



        <th>Booking Status</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
      
        <?php foreach($carlist as $car): ?>

          <tr>
         
        
        <td><?php  echo $car->vehical_model; ?></td>
        <td><?php  echo $car->vehical_number; ?></td>
        <td><?php  echo $car->setting_capacity ; ?></td>
        <td><?php  echo $car->rent_per_day ; ?></td>

        <?php if($car->Booking_status === '0') :?>
          <td> Not Available For Booking</td>
       

       <?php elseif($car->Booking_status === '1') :  ?>
        <td>Available For Booking"</td>
        <?php else   :?> 
          <td> Booked By Customer </td>
          <?php endif; ?>



   
       
    
       
        <td>
          <a href=" <?php echo base_url().'Agency/A_Carlist/editview/'.$car->vehicalid ?>" class="btn btn-primary">Edit</a>
        </td>
        <td>
        <a href=" <?php echo base_url().'Agency/A_Carlist/delete/'.$car->vehicalid ?>" class="btn btn-primary">Delete</a>
        </td>
        


     </tr>
     <?php endforeach ; ?>
      
    </tbody>
  </table>
   
 

  <div class="col-6">
    <h3> To Logout Your Account</h3>
    <a href="<?php echo base_url().'Agency/A_Carlist/logout' ?> " class= "btn btn-primary" > Logout </a>

  </div>

  <div class="row">
<div class="col-6">
    <h3>View All Car Booking</h3>
    <a href="<?php echo base_url().'Agency/A_Carlist/viewBooking' ?> " class= "btn btn-primary" > View Booking </a>
  </div>
</div>

 
  
</div>


</body>
</html>


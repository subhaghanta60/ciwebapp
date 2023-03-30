
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Available Car  Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  
  <h1>Available Car Details</h1>
   
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


  
  <table class="table">
    <thead>
      <tr>
        <th>Vehical Model</th>
        <th>Vehical Number</th>
        <th>Seating Capacity</th>
        <th>Rent Per Day</th>
        <th>Agent Id<th>
        <th>Rent</th>
        
        

      </tr>
    </thead>
    <tbody>

      <tr>
        <?php foreach($AvalableCarlist as $car): ?>
        <td><?php  echo $car->vehical_model ; ?></td>
        <td><?php  echo $car->vehical_number ; ?></td>
        <td><?php  echo $car->setting_capacity ; ?></td>
        <td><?php  echo $car->rent_per_day ; ?></td>
        <td><?php echo $car->agencyid ; ?></td>
        

       
        <td>
          <a href=" <?php echo base_url().'Customer/C_Booking/booking/'.$car->vehicalid ?>" class="btn btn-primary"> Rent</a>
        </td>


     </tr>
     <?php endforeach ; ?>
      
    </tbody>
  </table>
   
 

  <div class="col-6">
    <h3> To Logout Your Account</h3>
    <a href="<?php echo base_url().'Customer/C_Carlist/logout' ?> " class= "btn btn-primary" > Logout </a>

  </div>

 
  
</div>


</body>
</html>



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
  
  <h1>Employee Details</h1>
  <p>In this Employee WebPage , You see all Your  Employee details along with that you can add and also delete Employee Details </p>  
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
    <h3>To Add Employee Details</h3>
    <a href="<?php echo base_url().'Agency/A_Carlist/listcar' ?> " class= "btn btn-primary" > Create </a>
  </div>
</div>


 
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
   
       <td><?php echo $car->Booking_status ; ?></td>
    
       
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

 
  
</div>


</body>
</html>


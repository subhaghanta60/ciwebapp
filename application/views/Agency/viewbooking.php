
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
  
  <h1>All Booking details</h1>
   
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
      
        <th>Boooking Date</th>
        <th>Bokking Days</th>
        <th>Customer Id</th>
         


      </tr>
    </thead>
    <tbody>
      
        <?php foreach($carlist as $car): ?>

          <tr>
         
        
        <td><?php  echo $car->vehical_model; ?></td>
        <td><?php  echo $car->vehical_number; ?></td>
        <td><?php  echo $car->booking_date ; ?></td>
        <td><?php  echo $car->day ; ?></td>
   
       <td><?php echo $car->customerid ; ?></td>
    
       
        
        


     </tr>
     <?php endforeach ; ?>
      
    </tbody>
  </table>
   
 

  

 
</div>

 
  
</div>


</body>
</html>


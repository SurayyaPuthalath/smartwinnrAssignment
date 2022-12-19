<!DOCTYPE html>
<html>
 <head>
  <title>PHP Mysql REST API CRUD</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   


   <div class="table-responsive">
    <table class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Name</th>
       <th>Business Email</th>
       <th>Phone Number</th>
       <th>Organization</th>
       <th>Interest</th>
       <th>Message</th>
      </tr>
     </thead>

     <tbody>
     <?php
                    
                    include 'api.php';
                  
                    $sql="SELECT * FROM details";
                    $result = mysqli_query($conn,$sql);
                    
                    
                    while($data=mysqli_fetch_array($result)){
                   ?>
                <tr>
                   <td><?php echo $data['name']?></td>
                   <td><?php echo $data['email']?></td>
                   <td><?php echo $data['phone_no']?>
                </td>
                <td><?php echo $data['organization']?></td>
                   <td><?php echo $data['interest']?></td>
                   <td><?php echo $data['message']?>
                </td>
                  
                </tr>
                <?php } ?>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>

<script type="text/javascript">
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"fetch.php",
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }
</script>
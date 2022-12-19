<?php

//test_api.php

include('api.php');

// $api_object = new API();

// if($_GET["action"] == 'fetch_all')
// {
//  $data = $api_object->fetch_all();
// }
fetch_all();
function fetch_all()
{
 $query = "SELECT * FROM details";
 $result = $conn->query($query);
 if($result)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row;
  }
  
  return $data;
  
 }
}



echo json_encode($data);

?>
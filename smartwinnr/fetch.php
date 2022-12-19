
<?php

//fetch.php

$api_url = "http://localhost/smartwinnr/test_api.php";

$client = curl_init($api_url);

curl_setopt($client, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($client);

$result = json_decode($response);

$output = '';

if(count($result) > 0)
{
 foreach($result as $row)
 {
  $output .= '
  <tr>
   <td>'.$row->name.'</td>
   <td>'.$row->email.'</td>
   <td>'.$row->phone.'</td>
   <td>'.$row->organization.'</td>
   <td>'.$row->interest.'</td>
   <td>'.$row->message.'</td>

  </tr>
  ';
 }
}
else
{
 $output .= '
 <tr>
  <td colspan="4" align="center">No Data Found</td>
 </tr>
 ';
}

echo $output;

?>
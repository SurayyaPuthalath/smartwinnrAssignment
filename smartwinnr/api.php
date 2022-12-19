<?php 
$conn = mysqli_connect('localhost',"root","","api-data");



if ($_SERVER["REQUEST_METHOD"] === 'POST')
{

    

    $name = $_POST["name"];
    $email = $_POST["email"];
    $num = $_POST["num"];
    $org = $_POST["org"];
    $intr = $_POST["intr"];
$chk="";  
foreach($intr as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
    $msg=$_POST["msg"];

    $api_url = "http://localhost/smartwinner/api.php";
    $client = curl_init($api_url);
    curl_setopt($client, CURLOPT_POST, true);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    curl_close($client);
    $result = json_decode($response, true);
    

    $query = "INSERT INTO details (`name`,`email`,`phone_no`,`organization`,`interest`,`message`) VALUES ('$name','$email','$num','$org','$chk','$msg')";
    $result = $conn->query($query);
    if ($result == 1)
    {
        $data["message"] = "data saved successfully";
        $data["status"] = "Ok";
    }
    else
    {
        $data["message"] = "data not saved successfully";
        $data["status"] = "error";    
    }
}
else
{
    $data["message"] = "Format not supported";
    $data["status"] = "error";    
}
    echo json_encode($data);


    ?>

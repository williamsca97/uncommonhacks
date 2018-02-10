<?php

$client_id = "08bd2d1f3c4d645cdfa32071978a4a1c";
$client_secret = "a953130215e15c58c1e27c5b3ff4f41e";
$redirect_URI = "http://connorw.me/hackathon/uncommonhacks/thanks.php";
$auth_code = htmlspecialchars($_GET["code"]);

echo 'You have successfully authenticated with our application. The authentication code is ' . $auth_code . '.';

#echo <<<HTML
#<p>Click here to continue to the next step of authentication: <a href="http://connorw.me/hackathon/uncommonhacks/processing.php?code=$auth_code">CLICK HERE</a></p>
#HTML;

$postData = array(
    'client_id' => $client_id,
    'client_secret' => $client_secret,
    'grant_type' => 'authorization_code',
    'code' => 'zzz',
    'redirect_uri' => $redirect_URI,
    'scope' => 'basic%20rs3094315'
);

$postHeader = array(
  'client_id: ' . $client_id,
  'client_secret: ' . $client_secret,
  'grant_type: authorization_code',
  'code: zzz',
  'redirect_uri: ' . $redirect_URI,
  'scope: ' . 'basic%20rs3094315'
);

echo "We made it this far";



        $ch = curl_init('https://api.23andme.com/token/' . ' -d client_id=' . $client_id . ' -d client_secret=' . $client_secret . "  -d grant_type=authorization_code -d code=zzz -d 'redirect_uri=https://localhost:5000/receive_code/' -d 'scope=basic%20rs3094315'");
        #);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => json_encode($postHeader)
        ));
        echo "We made it this far 2";
        $response = curl_exec($ch);

        // Check for errors
        if($response === FALSE){
            echo "ERROR";
            die(curl_error($ch));
        }
echo "We made it this far 3";
        // Decode the response
        $responseData = json_decode($response, TRUE);

        // Print the date from the response
        echo $responseData['published'];

echo "Hello world";

?>


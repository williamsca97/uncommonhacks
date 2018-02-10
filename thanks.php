<?php

$client_id = "08bd2d1f3c4d645cdfa32071978a4a1c";
$client_secret = "a953130215e15c58c1e27c5b3ff4f41e";
$redirect_URI = "http://connorw.me/hackathon/uncommonhacks/thanks.php";

echo 'You have successfully authenticated with our application. The authentication code is ' . htmlspecialchars($_GET["code"]) . '.';
?>

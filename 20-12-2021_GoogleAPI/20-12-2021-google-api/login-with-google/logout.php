<?php

include('config.php');

$accesstoken=$_SESSION['access_token'];
$google_client->revokeToken($accesstoken);
session_destroy();
header('location:index.php');

?>

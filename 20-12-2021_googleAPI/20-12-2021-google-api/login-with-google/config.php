<?php
session_start();
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('1058036998369-nu8fjrlkuad7oqog20j6iqrd7ad3hm3k.apps.googleusercontent.com');
$google_client->setClientSecret('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');
$google_client->setRedirectUri('http://localhost/PhpWork/backend/20-12-2021-google-api/login-with-google/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');

?>
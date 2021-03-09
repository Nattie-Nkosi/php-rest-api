<?php

require_once('./Response.php');

$response = new Response();
$response->setSuccess(true);
$response->setHttpStatusCode(200);
$response->addMessage('Message Test 1');
$response->addMessage('Message Test 2');
$response->send();

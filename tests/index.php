<?php

use Bubu\Mail\MailTemplate;

require '../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable('../');
$dotenv->load();

MailTemplate::sendEmailVerification('quentin2004.buffard@gmail.com', 'OKKKKKKK');

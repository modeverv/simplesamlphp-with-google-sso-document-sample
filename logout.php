<?php
require_once('/var/www/php/simplesamlphp_sp2/lib/_autoload.php');

$auth = new SimpleSAML_Auth_Simple('default-sp');

$auth->logout('/sso/logout.html');

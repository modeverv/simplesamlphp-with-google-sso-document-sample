<?php
require_once('/var/www/php/simplesamlphp_sp2/lib/_autoload.php');
$auth = new SimpleSAML_Auth_Simple('default-sp');
$auth->requireAuth();
$attributes = $auth->getAttributes();
$mail = $attributes['oidc.email'][0];
// ここでメールアドレスが
if(!preg_match('/.*\@dream\-jack\.com/', $mail)){
    echo("メールがドメイン外");
    $auth->logout('/sso/ng.html');
    exit();
}

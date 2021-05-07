<?php
include(dirname(__FILE__) . '/lib/sso.php');
$filepath = $_REQUEST['filepath'];
header('Content-type: ' . mime_content_type($filepath));
header('Content-Disposition: attachment; filename*=UTF-8\'\'' . rawurlencode(basename($filepath)));
readfile($filepath);
<?php
include(dirname(__FILE__) . '/lib/sso.php');
?><h1>ログイン成功</h1>
<div><a href='logout.php'>ログアウト</a></div>
<div><a href='test.php'>SSO範囲のページ</a></div>
<div>
<p>
  画像ファイルなどもSSOがとおっていないと配信できないようにphpを噛ませることで安全  
</p>    
<img src="./download.php?filepath=/var/www/php/authdown/a.jpg"/>
</div>
<div>
<h1><a href="./download.php?filepath=/var/www/php/authdown/a.pdf">pdf</a></h1>
</div>
<?php
echo "<pre>";
var_dump($attributes);
echo "</pre>";

<?php
require_once(dirname(__FILE__,2). '/src/config/config.php');
require_once(dirname(__FILE__,2). '/src/models/user.php');


$user = new User(['name'=>'Guilherme', 'email' => 'guilherme_lou@hotmail.com']);
print_r($user);
echo '<br><br>';
$user -> email = 'guilherme_alterar@email.com';
print_r($user -> email);






echo 'fim!';
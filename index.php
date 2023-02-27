<?php
// require_once config.php
require_once('config/config.php');


echo 'HI';
// redirect website to base url
header('Location: ' . BASE_URL. $lang.'/visitorLogin.php');


?>
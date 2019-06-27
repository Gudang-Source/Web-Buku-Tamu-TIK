<?php
use PEAR2\Net\RouterOS;
require_once 'PEAR2/Autoload.php';

$util = new RouterOS\Util($client = new RouterOS\Client('10.50.50.1', 'kp', 'kp'));
$activeUsers = $util->setMenu('/ip/hotspot/active')->getAll(array('stats'));

foreach ($activeUsers as $user) {
   echo $user('user') . ' - ' . $user('address') . "<br>";
}

?>
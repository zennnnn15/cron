<?php
$file = dirname(__FILE__).'/output.txt';
$data = "Hello, it's ".date('d/m/y H:i:s'). "\n";
file_put_contents($file,$data,FILE_APPEND);



?>
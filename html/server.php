<?php
header("Content-type:text/html ; charset=utf-8") ;
$serv = new swoole_server("127.0.0.1", 9501);  
$serv->on('connect', function ($serv, $fd){  
    echo $fd."\n" ; 
    echo "Client:Connect.\n";  
});  
$serv->on('receive', function ($serv, $fd, $from_id, $data) {  
    $serv->send($fd, 'Swoole: '.$data);  
});  
$serv->on('close', function ($serv, $fd) {  
    echo "Client: Close.\n";  
});  
$serv->start();  


?>

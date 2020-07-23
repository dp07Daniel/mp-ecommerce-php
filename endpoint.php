<?php

    header('HTTP/1.1 200 OK');


$webhookContent = "";

$webhook = fopen('php://input' , 'r');
while (!feof($webhook)) {
       $webhookContent .= fread($webhook, 4096);
}
fclose($webhook);

file_put_contents(
  'registro.log',
  json_encode($webhookContent) . PHP_EOL,
  FILE_APPEND
);
$msg = json_encode($webhookContent);
mail("dapazos.89@gmail.com","Información recibida", $msg);


?>
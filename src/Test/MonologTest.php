<?php
namespace App\Test;

require_once __DIR__ . '/../../vendor/autoload.php';

use Monolog;

// info: https://www.codigonaranja.com/2018/monolog-trabaja-con-archivos-de-log-en-php/

//Crear un archivo de log (app.log)
$logHandler = new Monolog\Handler\StreamHandler(__DIR__ .'/../../var/logs/app.log');

// Inicializa el control de logs
$logger = new Monolog\Logger('my-ig');

//Definir el modo de manejar el log (con el archivo definido antes)
$logger->pushHandler($logHandler);

//Grabar entras de log, repertir esta linea cada vez que
//necesitamos agregar una entrada al log

//$logger->debug('Es una prueba de entradas en logs');
$logger->info('Es una prueba de entradas en logs');
<?php
namespace App\Test;

include_once __DIR__ . '/../../vendor/autoload.php';

use App\Controller\HolaArgs;

$ha = new HolaArgs(1,2,3,4,5,6);

$ha->show_args();






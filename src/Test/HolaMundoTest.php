<?php
namespace App\Test;

include_once __DIR__ . '/../../vendor/autoload.php';

use App\Controller\HolaMundo as hm;

hm::publicStaticHM();

$hm = new hm();

$hm->publicHM();


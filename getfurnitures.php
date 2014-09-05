<?php

require 'autoload.php';
spl_autoload_register('autoload');

use house\bedroom\Furnitures as bf;

$f = new bf();
$f->getAll();

use house\living_room\Furnitures as lf;

$f = new lf();
$f->getAll();

use house\kitchen\Furnitures as kf;

$f = new kf();
$f->getAll();

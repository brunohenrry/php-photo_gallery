<?php

require_once 'vendor/autoload.php';
require_once 'models/Photo.php';
require_once 'config.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Models\Photo; // Atualize o uso do namespace

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'gallery',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();

$photos = Photo::all();

include 'views/index.view.php';

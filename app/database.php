<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$capsule=new Capsule();
$capsule->addConnection([
'driver' => 'mysql',
            'host' => 'localhost',
            'port' => '3306',
            'database' => 'fenibar',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
            'strict' => false,
            'engine' => null,
	]);

$capsule->bootEloquent();
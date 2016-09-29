<?php
//Database Object is used from Eloquent, lavarel!!
use Illuminate\Database\Capsule\Manager as Capsule;

//Initialize Capsule/Manager;
$capsule = new Capsule;

//** Adding the Connection to MySQL.
$capsule->addConnection([
  'driver'    => 'mysql',
  'host'      => '127.0.0.1',
  'database'  => 'demo',
  'username'  => 'root',
  'password'  => '',
  'character' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix'    => '',
]);

/**
 * ***** THIS IS IMPORTANT ********
 * Eloquent Must setAsGlobal Variable !!!
 * Eloquent Must be Booted To be used. bootEloquent();
 */
$capsule->setAsGlobal();
$capsule->bootEloquent();

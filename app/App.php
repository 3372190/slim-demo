<?php

namespace App;

use DI\ContainerBuilder;
/**
 * Overwrite \php-di/slim-bridge App class
 * Creating our own Containerbuilder! to initialze all object!
 */
class App extends \DI\Bridge\Slim\App
{
  protected function configureContainer(ContainerBuilder $builder)
  {

      $builder->addDefinitions([
        'settings.displayErrorDetails' => true,
      ]);

      $builder->addDefinitions(__DIR__ . '/container.php');



  }
}

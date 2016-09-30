<?php

use Slim\Views\Twig as View;
use Slim\Views\TwigExtension as TwigExtension;
use Interop\Container\ContainerInterface;
use App\Models\User;

return [

  //Create Container callback to Initialize Class Object!!
  View::class => function (ContainerInterface $container){
    $view = new View(__DIR__ .'/../resources/views', [
      /**
       * Only Turn Debug On, to true while in developing stage!!
       * To Enable to dump variable in twig page.
       */
      'debug' => true,
      'cache' => false,
    ]);

    /**
     * Initialize TwigExtension Helpers Method
     * Eg: path_for()
     */
    $view->addExtension(new TwigExtension(
      $container->get('router'),
      $container->get('request')->getUri()
    ));

    /**
     *  Allow dump() function to be used on .twig Page!!!
     *  Must turn debug to true!!! In-order to work.
     */
    $view->addExtension(new Twig_Extension_Debug());


    return $view;
  },

  //Initialize User Class with Container CallBack function!
  User::class => function (ContainerInterface $container){
      return new User;
  },

];

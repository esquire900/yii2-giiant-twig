<?php

namespace esquire900\giianttwig;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 * @package esquire900\giiantTwig
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {

            if (!isset($app->getModule('gii')->generators['giiant-crud']['templates']['twig'])) {
                $app->getModule('gii')->generators['giiant-crud'] =  [
                    //generator class
                    'class'     => 'schmunk42\giiant\crud\Generator',
                    //setting for out templates
                    'templates' => [
                        // template name => path to template
                        'twig' =>'@vendor/esquire900/yii2-giiant-twig/crud',
                    ]
                ];
            }
            if ($app instanceof \yii\console\Application) {
                $app->controllerMap['giiant-twig'] = 'esquire900\\giianttwig\commands\ConvertController';
            }
        }
    }
}
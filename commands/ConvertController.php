<?php

namespace esquire900\giianttwig\commands;

use yii\console\Controller;
class ConvertController extends Controller
{
    public function actionIndex(){
        $files = \yii\helpers\FileHelper::findFiles("views", [function($path){
            if(strpos($path, '.twig.php') > -1) return true;
            return false;
        }]);

        foreach($files as $file){
            rename($file, str_replace(".twig.php", ".twig", $file));
        }
    }
}

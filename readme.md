yii2-giiant
===========

Twig templates for the Giiant Yii2 code generator

What is it?
-----------

This extension provides templates for the CRUD models from Giiant in the twig templating language. There were no
templates available for twig yet in the yii2 context, so this should save a lot of time for those wanting to work
with twig :)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

    composer.phar require esquire900/yii2-giiant-twig:"*"

The generators are registered automatically in the application bootstrap process, if the Gii module is enabled

Usage
-----

Visit your application's Gii (eg. `index.php?r=gii` and choose the CRUD generator from the main menu screen. Make
sure that:

- the "twig" template is selected at the bottom
- you use namespaces for the controller and models
- you fill in a search model

For basic usage instructions see the [Yii2 Guide section for Gii](http://www.yiiframework.com/doc-2.0/guide-tool-gii.html).

### Command Line 

Gii creates php files by default, which cannot be easily changed. This extention generates .twig.php files, to convert
them automagically, simply run the following from the root folder

    ./yii giiant-twig

(for basic app only, but you can simply change the behavior for other templates)

Thanks
-----

Special thanks to the whole yii community, and schmunk42 for creating giiant
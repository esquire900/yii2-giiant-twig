yii2-giiant
===========

Twig templates for the Giiant Yii2 code generator

What is it?
-----------

This extension provides templates for the CRUD models from Giiant in the twig templating language. There were no
templates available for twig yet in the yii2 context, so this should save a lot of time for those wanting to work
with twig :)

That means a form will not look like this:

    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'subject') ?>
        <?= $form->field($model, 'body')->textArea(['rows' => 6]) ?>
        <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
        ]) ?>
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
        </div>
    <?php ActiveForm::end(); ?>

But more like this

    {% set form = active_form_begin({
		'action': ['index'],
		'method': 'get'
	}) %}

    {{ form.field(model, 'id') }}
    {{ form.field(model, 'name') }}
    {{ form.field(model, 'owner_name') }}
    {{ form.field(model, 'owner_avatar') }}
    {{ form.field(model, 'description') }}

    <div class="form-group">
        {{ html.submitButton('Search', {'class' : 'btn btn-primary'}) | raw }}
        {{ html.resetButton('Reset', {'class' : 'btn btn-primary'}) | raw }}
    </div>

	{{ active_form_end() }}

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


Why should I even learn this stuff?
------------

Not only because it's easier to read for non-coders (like those hipster designers nowadays), but it forces you to only use
"view" logic in your views, which gives cleaner code and better serparation of responsibilities.

Thanks
-----

Special thanks to the whole yii community, and schmunk42 for creating giiant
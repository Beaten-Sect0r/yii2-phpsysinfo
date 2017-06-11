<?php

namespace bs\phpSysInfo;

use yii\base\BootstrapInterface;

/**
 * phpSysInfo module bootstrap class.
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public function bootstrap($app)
    {
        // add module I18N category
        if (!isset($app->i18n->translations['phpSysInfo'])) {
            $app->i18n->translations['phpSysInfo'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => '@bs/phpSysInfo/messages',
            ];
        }
    }
}

<?php

namespace bs\phpSysInfo\controllers;

use Yii;
use yii\web\Controller;
use bs\phpSysInfo\components\SystemInformationProvider;

class DefaultController extends Controller
{
    /**
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    public function actionIndex()
    {
        $provider = Yii::createObject(SystemInformationProvider::className(), []);

        return $this->render('index', ['provider' => $provider]);
    }
}

<?php

$this->title = Yii::t('phpSysInfo', 'System information');
$this->params['breadcrumbs'][] = $this->title;

?>

<h1>В разработке...</h1>

<div class="system-information-index">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">
                        <i class="fa fa-hdd-o"></i>
                        Webserver
                    </div>
                </div>
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Software</dt>
                        <dd><?= $_SERVER["SERVER_SOFTWARE"] ?></dd>

                        <dt>PHP</dt>
                        <dd><?= phpversion() ?></dd>

                        <dt>DB</dt>
                        <dd><?= Yii::$app->getDb()->getDriverName() ?></dd>

                        <dt>Name</dt>
                        <dd><?= $_SERVER["SERVER_NAME"] ?></dd>

                        <dt>IP</dt>
                        <dd><?= $_SERVER["SERVER_ADDR"] ?></dd>

                        <dt>Port</dt>
                        <dd><?= $_SERVER["SERVER_PORT"] ?></dd>

                    </dl>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">
                        <i class="fa fa-hdd-o"></i>
                        Time
                    </div>
                </div>
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>System date</dt>
                        <dd><?= Yii::$app->formatter->asDate(time(), 'long') ?></dd>

                        <dt>System time</dt>
                        <dd><?= Yii::$app->formatter->asTime(time(), 'long') ?></dd>

                        <dt>Timezone</dt>
                        <dd><?= date_default_timezone_get() ?></dd>
                    </dl>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">
                        <i class="fa fa-hdd-o"></i>
                        System
                    </div>
                </div>
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Processor</dt>
                        <dd><?= nl2br($provider->getCpuInfo()) ?></dd>

                        <dt>OS</dt>
                        <dd><?= $provider->getDistribution() ?></dd>

                        <dt>Kernel</dt>
                        <dd><?= $provider->getKernel() ?></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>

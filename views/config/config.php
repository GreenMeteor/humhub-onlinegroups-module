<?php

use humhub\compat\CActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="panel panel-default">
    <div class="panel-heading"><?= Yii::t('base', '<strong>Online Groups</srtong> Module Configuration'); ?></div>
    <div class="panel-body">


        <p><?= Yii::t('base', 'You may configure the number users to be shown.'); ?></p>
        <br/>

        <?php $form = CActiveForm::begin(); ?>

        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <?= $form->labelEx($model, 'maxMembers'); ?>
            <?= $form->textField($model, 'maxMembers', ['class' => 'form-control']); ?>
            <?= $form->error($model, 'maxMembers'); ?>
        </div>

        <hr>
        <?= Html::submitButton(Yii::t('base', 'Save'), array('class' => 'btn btn-primary')); ?>
        <a class="btn btn-default" href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('base', 'Back to modules'); ?></a>

        <?php CActiveForm::end(); ?>
    </div>
</div>
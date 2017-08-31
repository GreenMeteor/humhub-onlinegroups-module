<?php

use yii\helpers\Url;
use yii\helpers\Html;
use humhub\compat\CActiveForm;
?>

<div class="panel panel-default">
    <div class="panel-heading"><?= Yii::t('base', '<strong>Online Groups</strong> Module Configuration'); ?></div>
    <div class="panel-body">

        <br>

        <?php $form = CActiveForm::begin(); ?>
        <?= $form->errorSummary($model); ?>

        <div class="form-group">
            <?= $form->labelEx($model, 'panelTitle'); ?>
            <?= $form->textField($model, 'panelTitle', ['class' => 'form-control']); ?>
            <?= $form->error($model, 'panelTitle'); ?>
        </div>

        <div class="form-group">
            <?= $form->labelEx($model, 'maxMembers'); ?>
            <?= $form->textField($model, 'maxMembers', ['class' => 'form-control']); ?>
            <?= $form->error($model, 'maxMembers'); ?>
        </div>

        <hr>
        <?= Html::submitButton(Yii::t('OnlineGroupsModule.base', 'Save'), ['class' => 'btn btn-primary']); ?>
        <a class="btn btn-default"
           href="<?= Url::to(['/admin/module']); ?>"><?= Yii::t('base', 'Back to modules'); ?></a>

        <!-- show flash message after saving -->
        <?= humhub\widgets\DataSaved::widget(); ?>

        <?php CActiveForm::end(); ?>
    </div>
</div>

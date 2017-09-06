<?php

namespace humhub\modules\onlinegroups;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\onlinegroups\widgets\onlinegroups;
use humhub\modules\onlinegroups\Assets;

class Events extends \yii\base\Object
{
    public static function onAdminMenuInit(\yii\base\Event $event)
    {
        $event->sender->addItem([
            'label' => Yii::t('base', 'Online Groups'),
            'url' => Url::to(['/onlinegroups/config']),
            'group' => 'settings',
            'icon' => '<i class="fa fa-comments"></i>',
            'isActive' => Yii::$app->controller->module && Yii::$app->controller->module->id == 'onlinegroups' && Yii::$app->controller->id == 'admin',
            'sortOrder' => 650
        ]);
    }
}

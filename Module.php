<?php

namespace humhub\modules\onlinegroups;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\onlinegroups\widgets\OnlineGroupsSidebarWidget;

class Module extends \humhub\components\Module
{
    public static function onSidebarInit($event)
    {
        $event->sender->addWidget(OnlineGroupsSidebarWidget::className(), [], ['sortOrder' => 300]);
    }
    public function getConfigUrl()
    {
        return Url::to(['/onlinegroups/config/config']);
    }
    public function enable()
    {
        parent::enable();
        Setting::Set('panelTitle', 'Online Group Members', 'groups');
        Setting::Set('maxMembers', 10, 'groups');
    }
}

?>
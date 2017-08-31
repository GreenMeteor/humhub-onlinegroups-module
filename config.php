<?php

use humhub\modules\dashboard\widgets\Sidebar;

return [
    'id' => 'onlinegroups',
    'class' => 'humhub\modules\onlinegroups\Module',
    'namespace' => 'humhub\modules\onlinegroups',
    'events' => [
        ['class' => Sidebar::className(), 'event' => Sidebar::EVENT_INIT, 'callback' => ['humhub\modules\onlinegroups\Module', 'onSidebarInit']],
    ],
];
?>

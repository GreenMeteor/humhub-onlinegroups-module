<?php

namespace humhub\modules\onlinegroups;

use yii\web\AssetBundle;
use humhub\models\Setting;

class Assets extends AssetBundle
{
    public $css = [
        'group.css'
    ];
    public function init()
    {
        $theme = Setting::Get('theme', 'onlinegroups');
        if ($theme)
            $this->css = [
                $theme
            ];
        
        $this->sourcePath = dirname(__FILE__) . '/assets';
        parent::init();
    }
}
<?php
namespace humhub\modules\onlinegroups\forms;

use Yii;

class OnlineGroupsConfigureForm extends \yii\base\Model
{

    public $panelTitle;
    public $maxMembers;


    public function rules()
    {
        return [
            [['maxMembers', 'panelTitle'], 'required'],
            ['maxMembers', 'integer', 'min' => '0'],

        ];
    }

    public function attributeLabels()
    {
        return [
            'panelTitle' => Yii::t('OnlineGroupsModule.base', 'The panel title for the dashboard widget.'),
            'maxMembers' => Yii::t('OnlineGroupsModule.base', 'The number of max. Online Groups that will be shown.'),
        ];
    }

}

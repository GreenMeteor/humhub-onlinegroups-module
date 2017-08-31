<?php

namespace humhub\modules\onlinegroups\controllers;

use Yii;
use humhub\modules\admin\components\Controller;
use humhub\modules\onlinegroups\forms\OnlineGroupsConfigureForm;
use humhub\models\Setting;

/**
 * Defines the configure actions.
 *
 * @package humhub.modules.onlinegroups.controllers
 * @author Marjana Pesic
 */

class ConfigController extends Controller
{

    /**
     * Configuration Action for Super Admins
     */
    public function actionConfig()
    {
        $form = new OnlineGroupsConfigureForm();
        $form->panelTitle = Setting::Get('panelTitle', 'onlinegroups');
        $form->maxMembers = Setting::Get('maxMembers', 'onlinegroups');

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $form->panelTitle = Setting::Set('panelTitle', $form->panelTitle, 'onlinegroups');
            $form->maxMembers = Setting::Set('maxMembers', $form->maxMembers, 'onlinegroups');

/* ToDo: integrate list from most-active-users at a specific user amount */

            Yii::$app->getSession()->setFlash('data-saved', Yii::t('AdminModule.controllers_SettingController', 'Saved'));
            $this->redirect(['/onlinegroups/config/config']);
        }

        return $this->render('config', array('model' => $form));
    }

}

?>

<?php

namespace humhub\modules\onlinegroups\widgets;

use Yii;
use yii\helpers\Url;
use humhub\models\Setting;
use humhub\modules\user\models\User;
use humhub\modules\user\models\GroupUser;
use humhub\modules\user\components\Session;
use yii\web\HttpException;

class OnlineGroupsSidebarWidget extends \yii\base\Widget
{
    /**
     * Execute widget
     */
    public function run()
    {
        $maxMembers = (int) Setting::Get('maxMembers', 'onlinegroups');
        $subQuery = GroupUser::find()->where('group_user.user_id = user.id')->andWhere(['group_user.group_id' => $myGroupId]);
        $query = Session::getOnlineUsers();
        $query->andWhere('EXISTS', $subQuery);
        $query->limit($maxMembers);
        $query->andWhere(['user.status' => User::STATUS_ENABLED]);
        $query->orderBy(['user.created_at' => SORT_DESC]);
        if ($fromDate != null && $fromDate != "") {
            $query->andWhere(['>=', 'user.created_at', $fromDate]);
        }
        return $this->render('onlinegroups', [
                    'OnlineGroups' => $OnlineGroups,
                    'title' => Setting::Get('panelTitle', 'onlinegroups')
        ]);
    }
}
?>

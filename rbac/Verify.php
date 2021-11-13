<?php
namespace app\rbac;

use Yii;
use yii\base\Behavior;
use yii\web\ForbiddenHttpException;



class Verify extends Behavior
{
    public $actions = null;
    public function events()
    {
        return [
            yii\web\Controller::EVENT_BEFORE_ACTION => 'access'
        ];
    }
    public function access(){
        foreach($this->actions as $action){
            if($this->owner->action->id == $action){
                if (!\Yii::$app->user->can('admin')) {
                    throw new ForbiddenHttpException('Доступ закрыт.');
                }
            }
        }
    }
}

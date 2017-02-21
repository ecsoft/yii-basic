<?php
/**
 * Created by PhpStorm.
 * User: dntsoft
 * Date: 2017/2/6
 * Time: 下午6:00
 */
namespace app\views\customer;
use yii\widgets\ListView;
use app\models\customer\Customer;
use app\models\customer\Phone;

echo ListView::widget(
    [
        'options'=>[
            'class'=>'list-view',
            'id'=>'search_result',
        ],
        'itemView'=>'_customer',
        'dataProvider'=> $records
    ]
);
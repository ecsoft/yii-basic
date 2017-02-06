<?php
/**
 * Created by PhpStorm.
 * User: dntsoft
 * Date: 2017/2/6
 * Time: 下午10:28
 */
echo \yii\widgets\DetailView::widget(
    [
        'model'=>$model,
        'attributes'=>[
            ['attribute'=>'name'],
            ['attribute'=>'birth_date','value'=>$model->birth_date->format('Y-m-d')],
            ['attribute'=>'notes'],
            ['label'=>'Phone Number','attribute'=>'phones.0.number']
        ]
    ]
);
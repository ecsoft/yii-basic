<?php
/**
 * Created by PhpStorm.
 * User: dntsoft
 * Date: 2017/2/6
 * Time: 上午11:11
 */
use app\models\customer\CustomerRecord;
use app\models\customer\PhoneRecord;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$form = ActiveForm::begin(
    [
        'id'=>'add-customer-form'
    ]
);
echo $form->errorSummary([$customer,$phone]);
echo $form->field($customer,'name');
echo $form->field($customer,'birth_date');
echo $form->field($customer,'notes');
echo $form->field($phone,'number');
echo Html::submitButton('Submit',['class'=>'btn btn-primary']);
ActiveForm::end();
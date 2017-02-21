<?php
/**
 * Created by PhpStorm.
 * User: dntsoft
 * Date: 2017/2/6
 * Time: 下午10:24
 */

use yii\helpers\Html;

echo Html::beginForm(['/customer'],'get');
echo Html::label('phone number to search:','phone_number');
echo Html::textInput('phone_number');
echo Html::submitButton('search');
echo Html::endForm();
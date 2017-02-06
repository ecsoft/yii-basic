<?php
/**
 * Created by PhpStorm.
 * User: dntsoft
 * Date: 2017/2/6
 * Time: 上午10:38
 */
namespace app\models\customer;
use yii\db\ActiveRecord;
class PhoneRecord extends ActiveRecord
{
    public static function tableName()
    {
        return 'phone';
    }

    public function rules()
    {
        return [
            ['customer_id','number'],
            ['number','string'],
            [['customer_id','number'],'required'],
        ];
    }
}
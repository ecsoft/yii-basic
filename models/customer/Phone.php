<?php
/**
 * Created by PhpStorm.
 * User: dntsoft
 * Date: 2017/2/4
 * Time: 下午8:18
 */
namespace app\models\customer;
class Phone
{
    /**
     * @var string
     */
    public $number;
    public function __construct($number)
    {
        $this->number = $number;
    }
}
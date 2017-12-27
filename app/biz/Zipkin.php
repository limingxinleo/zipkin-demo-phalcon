<?php
// +----------------------------------------------------------------------
// | Zipkin.php [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 limingxinleo All rights reserved.
// +----------------------------------------------------------------------
// | Author: limx <715557344@qq.com> <https://github.com/limingxinleo>
// +----------------------------------------------------------------------
namespace App\Biz;

use Xin\Thrift\MicroService\Options;
use Xin\Traits\Common\InstanceTrait;

class Zipkin
{
    use InstanceTrait;

    public $key;

    public function instanceCount()
    {
        return count(static::$_instances);
    }

    public function handle(Options $options)
    {

    }
}
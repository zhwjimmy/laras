<?php
/**
 * Created by PhpStorm.
 * User: duanbin
 * Date: 2018/9/12
 * Time: 17:06
 */

namespace Pappercup\Support;

use Illuminate\Support\Facades\Facade;

class SwooleHttpFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'swoole.http';
    }
}
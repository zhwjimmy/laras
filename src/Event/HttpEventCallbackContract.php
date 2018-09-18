<?php
/**
 * Created by PhpStorm.
 * User: pappercup
 * Date: 2018/9/18
 * Time: 13:23
 */

namespace Pappercup\Event;


use Illuminate\Foundation\Application;

interface HttpEventCallbackContract extends EventCallbackContract {

    /**
     * @param Application $application
     * @return mixed
     * @author pappercup
     * @date 2018/9/18 15:44
     */
    public static function beforeBootstrapLaravel(Application $application);

    /**
     * @param Application $application
     * @param \Swoole\Http\Response $swooleResponse
     * @param string $content
     * @return mixed
     * @author pappercup
     * @date 2018/9/18 15:44
     */
    public static function afterBootstrapLaravel(Application $application, \Swoole\Http\Response $swooleResponse, string $content);

}

<?php

namespace App\Tasks\Zipkin;

use App\Tasks\Task;
use App\Thrift\Clients\AppClient;
use App\Thrift\Clients\ZipkinClient;
use Xin\Cli\Color;
use Zipkin\Tracer;

class TestTask extends Task
{
    public function mainAction()
    {
        echo Color::head('Help:') . PHP_EOL;
        echo Color::colorize('  基本测试') . PHP_EOL . PHP_EOL;

        echo Color::head('Usage:') . PHP_EOL;
        echo Color::colorize('  php run zipkin:test@[action]', Color::FG_LIGHT_GREEN) . PHP_EOL . PHP_EOL;

        echo Color::head('Actions:') . PHP_EOL;
        echo Color::colorize('  num     内存自增测试', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  num2    解决单例内存自增', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  redis   Redis DB切换测试', Color::FG_LIGHT_GREEN) . PHP_EOL;
        echo Color::colorize('  zipkin  测试Zipkin', Color::FG_LIGHT_GREEN) . PHP_EOL;
    }

    public function zipkinAction()
    {
        $client = ZipkinClient::getInstance();
        echo $client->test3('limx');
    }

    public function numAction()
    {
        $client = AppClient::getInstance();
        for ($i = 0; $i < 100; $i++) {
            dump($client->num());
        }
    }

    public function num2Action()
    {
        $client = AppClient::getInstance();
        for ($i = 0; $i < 100; $i++) {
            dump($client->num2());
        }
    }

    public function redisAction()
    {
        $client = AppClient::getInstance();
        $client->redis();
        // $client->redis();
    }
}

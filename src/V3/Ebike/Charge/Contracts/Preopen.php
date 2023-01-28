<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ebike\Charge\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Preopen
{
    /**
     * 预开通服务(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_3.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1510770601',
            'appid' => 'wx47c677487ce3ac47',
            'sub_appid' => 'wxcc603d9f0d54eaf0',
            'trade_scene' => 'CHARGE',
            'openid' => 'ot35_4gNgXsUuh2sQY0lT9N08AU0',
        ],
    ]): ResponseInterface;

    /**
     * 预开通服务(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/vehicle/ebike/chapter3_3.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1510770601',
            'appid' => 'wx47c677487ce3ac47',
            'sub_appid' => 'wxcc603d9f0d54eaf0',
            'trade_scene' => 'CHARGE',
            'openid' => 'ot35_4gNgXsUuh2sQY0lT9N08AU0',
        ],
    ]): PromiseInterface;
}

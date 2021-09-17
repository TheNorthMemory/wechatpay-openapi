<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface App
{
    /**
     * 合单下单-APP支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1900000109',
            'combine_out_trade_no' => 'P20150806125346',
            'scene_info' => [],
            'sub_orders' => [],
            'combine_payer_info' => [],
            'time_start' => '2019-12-31T15:59:60+08:00',
            'time_expire' => '2019-12-31T15:59:60+08:00',
            'notify_url' => 'https://yourapp.com/notify',
        ],
    ]): ResponseInterface;

    /**
     * 合单下单-APP支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'combine_appid' => 'wxd678efh567hg6787',
            'combine_mchid' => '1900000109',
            'combine_out_trade_no' => 'P20150806125346',
            'scene_info' => [],
            'sub_orders' => [],
            'combine_payer_info' => [],
            'time_start' => '2019-12-31T15:59:60+08:00',
            'time_expire' => '2019-12-31T15:59:60+08:00',
            'notify_url' => 'https://yourapp.com/notify',
        ],
    ]): PromiseInterface;
}

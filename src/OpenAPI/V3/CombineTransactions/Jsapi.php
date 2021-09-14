<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Jsapi
{
    /**
     * 合单下单-JSAPI支付(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'combine_appid' => '',
            'combine_mchid' => '',
            'combine_out_trade_no' => '',
            'scene_info' => [],
            'sub_orders' => [],
            'combine_payer_info' => [],
            'time_start' => '',
            'time_expire' => '',
            'notify_url' => '',
        ],
    ]): ResponseInterface;

    /**
     * 合单下单-JSAPI支付(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'combine_appid' => '',
            'combine_mchid' => '',
            'combine_out_trade_no' => '',
            'scene_info' => [],
            'sub_orders' => [],
            'combine_payer_info' => [],
            'time_start' => '',
            'time_expire' => '',
            'notify_url' => '',
        ],
    ]): PromiseInterface;
}

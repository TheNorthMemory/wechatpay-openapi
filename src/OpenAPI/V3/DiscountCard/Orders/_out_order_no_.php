<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_order_no_
{
    /**
     * 更新先享卡订单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.03.26
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_2.shtml
     */
    public function patch(array $options = [
        'out_order_no' => '',
        'json' => [
            'objectives' => [],
            'rewards' => [],
        ],
    ]): ResponseInterface;

    /**
     * 更新先享卡订单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.03.26
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_2.shtml#async
     */
    public function patchAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'objectives' => [],
            'rewards' => [],
        ],
    ]): PromiseInterface;

    /**
     * 通过先享卡订单号查询订单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.03.26
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_1.shtml
     */
    public function get(array $options = [
        'out_order_no' => '',
    ]): ResponseInterface;

    /**
     * 通过先享卡订单号查询订单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.03.26
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_1.shtml#async
     */
    public function getAsync(array $options = [
        'out_order_no' => '',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Modify
{
    /**
     * 修改订单金额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_4.shtml
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => '',
            'service_id' => '',
            'post_payments' => [],
            'post_discounts' => [],
            'total_amount' => 0,
            'reason' => '',
        ],
    ]): ResponseInterface;

    /**
     * 修改订单金额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_4.shtml#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => '',
            'service_id' => '',
            'post_payments' => [],
            'post_discounts' => [],
            'total_amount' => 0,
            'reason' => '',
        ],
    ]): PromiseInterface;
}

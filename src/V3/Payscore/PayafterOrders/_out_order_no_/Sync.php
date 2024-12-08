<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\PayafterOrders\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 支付分订单同步(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/payafter-orders/%7Bout_order_no%7D/sync
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091010',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 支付分订单同步(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/payafter-orders/%7Bout_order_no%7D/sync
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091010',
            ],
        ],
    ]): PromiseInterface;
}

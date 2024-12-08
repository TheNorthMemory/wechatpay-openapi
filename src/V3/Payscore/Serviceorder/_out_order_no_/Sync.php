<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 同步服务订单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder/%7Bout_order_no%7D/sync
     */
    public function post(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091210',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 同步服务订单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder/%7Bout_order_no%7D/sync
     */
    public function postAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091210',
            ],
        ],
    ]): PromiseInterface;
}

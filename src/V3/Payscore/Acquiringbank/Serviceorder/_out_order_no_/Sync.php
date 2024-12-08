<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Acquiringbank\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 从业机构同步微信支付分订单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/serviceorder/%7Bout_order_no%7D/sync
     */
    public function post(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'channel_id' => '1230000109',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091210',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 从业机构同步微信支付分订单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/acquiringbank/serviceorder/%7Bout_order_no%7D/sync
     */
    public function postAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'channel_id' => '1230000109',
            'type' => 'Order_Paid',
            'detail' => [
                'paid_time' => '20091225091210',
            ],
        ],
    ]): PromiseInterface;
}

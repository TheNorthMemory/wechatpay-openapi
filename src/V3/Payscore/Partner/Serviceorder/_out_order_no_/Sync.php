<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Sync
{
    /**
     * 同步订单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/partner-service-order/sync-partner-service-order.html
     */
    public function post(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'type' => 'Order_Paid',
            'detail' => [
                'seq' => 1,
                'paid_time' => '20091225091210',
                'paid_amount' => 1,
            ],
        ],
    ]): ResponseInterface;

    /**
     * 同步订单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-weixin-pay-score/partner-service-order/sync-partner-service-order.html#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'type' => 'Order_Paid',
            'detail' => [
                'seq' => 1,
                'paid_time' => '20091225091210',
                'paid_amount' => 1,
            ],
        ],
    ]): PromiseInterface;
}

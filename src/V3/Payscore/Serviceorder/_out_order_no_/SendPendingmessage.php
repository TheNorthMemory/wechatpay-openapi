<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SendPendingmessage
{
    /**
     * 下发服务费用待处理消息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-order/send-order-pending-message.html
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'post_payments' => [[
                'name' => '就餐费用',
                'amount' => 40000,
                'description' => '就餐人均100元',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'total_amount' => 50000,
            'prepaid_time' => '20231218',
        ],
    ]): ResponseInterface;

    /**
     * 下发服务费用待处理消息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/weixin-pay-score/service-order/send-order-pending-message.html#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'post_payments' => [[
                'name' => '就餐费用',
                'amount' => 40000,
                'description' => '就餐人均100元',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'total_amount' => 50000,
            'prepaid_time' => '20231218',
        ],
    ]): PromiseInterface;
}

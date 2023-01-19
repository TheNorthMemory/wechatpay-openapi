<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\PayafterOrders\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Complete
{
    /**
     * 完结先享后付订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=17_4&index=6
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'finish_type' => 0,
            'cancel_reason' => '',
            'real_service_start_time' => '',
            'real_service_end_time' => '',
            'real_service_end_location' => '',
            'fees' => [[
                'fee_name' => '',
                'fee_count' => 0,
                'fee_amount' => 0,
                'fee_desc' => '',
            ],],
            'discounts' => [[
                'discount_name' => '满20减1元',
                'discount_amount' => 0,
                'discount_desc' => '不与其他优惠叠加',
            ],],
            'total_amount' => 0,
            'finish_ticket' => '',
            'profit_sharing' => true,
        ],
    ]): ResponseInterface;

    /**
     * 完结先享后付订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=17_4&index=6#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'finish_type' => 0,
            'cancel_reason' => '',
            'real_service_start_time' => '',
            'real_service_end_time' => '',
            'real_service_end_location' => '',
            'fees' => [[
                'fee_name' => '',
                'fee_count' => 0,
                'fee_amount' => 0,
                'fee_desc' => '',
            ],],
            'discounts' => [[
                'discount_name' => '满20减1元',
                'discount_amount' => 0,
                'discount_desc' => '不与其他优惠叠加',
            ],],
            'total_amount' => 0,
            'finish_ticket' => '',
            'profit_sharing' => true,
        ],
    ]): PromiseInterface;
}

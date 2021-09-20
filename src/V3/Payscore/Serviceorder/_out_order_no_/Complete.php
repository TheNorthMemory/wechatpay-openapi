<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Complete
{
    /**
     * 完结支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_5.shtml
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'post_payments' => [[
                'name' => '就餐费用, 服务费',
                'amount' => 40000,
                'description' => '就餐人均100元，服务费：100/小时',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'time_range' => [
                'start_time' => '',
                'start_time_remark' => '',
                'end_time' => '',
                'end_time_remark' => '',
            ],
            'location' => [
                'start_location' => '',
                'end_location' => '',
            ],
            'total_amount' => 50000,
            'profit_sharing' => true,
            'goods_tag' => '',
        ],
    ]): ResponseInterface;

    /**
     * 完结支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_5.shtml#async
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '500001',
            'post_payments' => [[
                'name' => '就餐费用, 服务费',
                'amount' => 40000,
                'description' => '就餐人均100元，服务费：100/小时',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'time_range' => [
                'start_time' => '',
                'start_time_remark' => '',
                'end_time' => '',
                'end_time_remark' => '',
            ],
            'location' => [
                'start_location' => '',
                'end_location' => '',
            ],
            'total_amount' => 50000,
            'profit_sharing' => true,
            'goods_tag' => '',
        ],
    ]): PromiseInterface;
}

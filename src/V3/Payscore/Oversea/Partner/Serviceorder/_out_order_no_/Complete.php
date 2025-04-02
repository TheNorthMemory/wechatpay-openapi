<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Oversea\Partner\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Complete
{
    /**
     * 完结支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/oversea/partner/serviceorder/%7Bout_order_no%7D/complete
     */
    public function post(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'post_payments' => [[
                'name' => '就餐费用',
                'description' => '就餐人均100元',
                'amount' => 40000,
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'total_amount' => 50000,
            'currency' => 'HKD',
            'time_range' => [
                'start_time' => '2019-11-11T16:24:05+08:00',
                'end_time' => '2019-11-11T16:24:05+08:00',
                'start_time_remark' => '备注1',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'profit_sharing' => true,
            'complete_time' => '2019-11-11T16:24:05+08:00',
            'goods_tag' => 'goods_tag',
        ],
    ]): ResponseInterface;

    /**
     * 完结支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/oversea/partner/serviceorder/%7Bout_order_no%7D/complete
     */
    public function postAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'post_payments' => [[
                'name' => '就餐费用',
                'description' => '就餐人均100元',
                'amount' => 40000,
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'amount' => 100,
                'count' => 2,
            ],],
            'total_amount' => 50000,
            'currency' => 'HKD',
            'time_range' => [
                'start_time' => '2019-11-11T16:24:05+08:00',
                'end_time' => '2019-11-11T16:24:05+08:00',
                'start_time_remark' => '备注1',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'profit_sharing' => true,
            'complete_time' => '2019-11-11T16:24:05+08:00',
            'goods_tag' => 'goods_tag',
        ],
    ]): PromiseInterface;
}

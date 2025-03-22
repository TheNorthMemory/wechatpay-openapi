<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Complete
{
    /**
     * 完结支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder/%7Bout_order_no%7D/complete
     */
    public function post(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
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
            'time_range' => [
                'start_time' => '20091225091010',
                'end_time' => '20091225121010',
                'start_time_remark' => '备注1',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'profit_sharing' => true,
            'goods_tag' => 'goods_tag',
            'device' => [
                'start_device_id' => 'HG123456',
                'end_device_id' => 'HG123456',
                'materiel_no' => 'example_materiel_no',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 完结支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder/%7Bout_order_no%7D/complete
     */
    public function postAsync(array $options = [
        'out_order_no' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
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
            'time_range' => [
                'start_time' => '20091225091010',
                'end_time' => '20091225121010',
                'start_time_remark' => '备注1',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'profit_sharing' => true,
            'goods_tag' => 'goods_tag',
            'device' => [
                'start_device_id' => 'HG123456',
                'end_device_id' => 'HG123456',
                'materiel_no' => 'example_materiel_no',
            ],
        ],
    ]): PromiseInterface;
}

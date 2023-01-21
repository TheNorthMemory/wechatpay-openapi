<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Orders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_order_no_
{
    /**
     * 更新先享卡订单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Thu Mar 26 2020 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_2.shtml
     */
    public function patch(array $options = [
        'out_order_no' => '233bcbf407e87789b8e471f251774f95',
        'json' => [
            'objectives' => [[
                'objective_serial_no' => '578354545',
                'objective_id' => 123456,
                'performance_description' => '购买商品',
                'performance_type' => 'INCREASE',
                'count' => 1,
                'performance_time' => '2015-05-20T13:29:35.120+08:00',
                'remark' => '特价商品',
            ],],
            'rewards' => [[
                'reward_serial_no' => '578354',
                'reward_id' => 123456,
                'description' => '购买商品',
                'reward_type' => 'INCREASE',
                'count' => 1,
                'amount' => 100,
                'reward_time' => '2015-05-20T13:29:35.120+08:00',
                'remark' => '特价商品',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 更新先享卡订单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Thu Mar 26 2020 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_2.shtml#async
     */
    public function patchAsync(array $options = [
        'out_order_no' => '233bcbf407e87789b8e471f251774f95',
        'json' => [
            'objectives' => [[
                'objective_serial_no' => '578354545',
                'objective_id' => 123456,
                'performance_description' => '购买商品',
                'performance_type' => 'INCREASE',
                'count' => 1,
                'performance_time' => '2015-05-20T13:29:35.120+08:00',
                'remark' => '特价商品',
            ],],
            'rewards' => [[
                'reward_serial_no' => '578354',
                'reward_id' => 123456,
                'description' => '购买商品',
                'reward_type' => 'INCREASE',
                'count' => 1,
                'amount' => 100,
                'reward_time' => '2015-05-20T13:29:35.120+08:00',
                'remark' => '特价商品',
            ],],
        ],
    ]): PromiseInterface;

    /**
     * 通过先享卡订单号查询订单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Thu Mar 26 2020 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_1.shtml
     */
    public function get(array $options = [
        'out_order_no' => '233bcbf407e87789b8e471f251774f95',
    ]): ResponseInterface;

    /**
     * 通过先享卡订单号查询订单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Thu Mar 26 2020 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_1.shtml#async
     */
    public function getAsync(array $options = [
        'out_order_no' => '233bcbf407e87789b8e471f251774f95',
    ]): PromiseInterface;
}

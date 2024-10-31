<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read PayafterOrders\_out_order_no_ $_out_order_no_
 */
interface PayafterOrders
{
    /**
     * 创建先享后付订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=17_1&index=3
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '500001',
            'service_start_time' => '',
            'service_end_time' => '',
            'service_start_location' => '',
            'service_end_location' => '',
            'service_introduction' => '',
            'fees' => [[
                'fee_name' => '',
                'fee_count' => 0,
                'fee_amount' => 0,
                'fee_desc' => '',
            ],],
            'discounts' => [[
                'discount_name' => '满20减1元',
                'discount_desc' => '不与其他优惠叠加',
            ],],
            'risk_amount' => 0,
            'attach' => '',
            'need_user_confirm' => true,
            'openid' => '',
            'name' => '',
            'phone' => '',
            'userid' => '',
            'address' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 创建先享后付订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=17_1&index=3#async
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_id' => '500001',
            'service_start_time' => '',
            'service_end_time' => '',
            'service_start_location' => '',
            'service_end_location' => '',
            'service_introduction' => '',
            'fees' => [[
                'fee_name' => '',
                'fee_count' => 0,
                'fee_amount' => 0,
                'fee_desc' => '',
            ],],
            'discounts' => [[
                'discount_name' => '满20减1元',
                'discount_desc' => '不与其他优惠叠加',
            ],],
            'risk_amount' => 0,
            'attach' => '',
            'need_user_confirm' => true,
            'openid' => '',
            'name' => '',
            'phone' => '',
            'userid' => '',
            'address' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;

    /**
     * 查询先享后付订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=17_2&index=4
     */
    public function get(array $options = [
        'query' => [
            'service_id' => '',
            'out_order_no' => '',
            'query_id' => '',
            'appid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询先享后付订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/payscore.php?chapter=17_2&index=4#async
     */
    public function getAsync(array $options = [
        'query' => [
            'service_id' => '',
            'out_order_no' => '',
            'query_id' => '',
            'appid' => '',
        ],
    ]): PromiseInterface;
}

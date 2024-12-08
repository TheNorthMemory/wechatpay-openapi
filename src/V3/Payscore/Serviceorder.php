<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Serviceorder\_out_order_no_ $_out_order_no_
 * @property-read Serviceorder\DirectComplete $directComplete
 */
interface Serviceorder
{
    /**
     * 创建支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder
     */
    public function post(array $options = [
        'json' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '2002000000000558128851361561536',
            'service_introduction' => '某某酒店',
            'post_payments' => [[
                'name' => '就餐费用',
                'amount' => 40000,
                'description' => '就餐人均100元',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'count' => 2,
            ],],
            'time_range' => [
                'start_time' => '20091225091010',
                'end_time' => '20091225121010',
                'start_time_remark' => '备注1',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'risk_fund' => [
                'name' => 'DEPOSIT',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'notify_url' => 'https://api.test.com',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'need_user_confirm' => true,
        ],
    ]): ResponseInterface;

    /**
     * 创建支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder
     */
    public function postAsync(array $options = [
        'json' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'appid' => 'wxd678efh567hg6787',
            'service_id' => '2002000000000558128851361561536',
            'service_introduction' => '某某酒店',
            'post_payments' => [[
                'name' => '就餐费用',
                'amount' => 40000,
                'description' => '就餐人均100元',
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'count' => 2,
            ],],
            'time_range' => [
                'start_time' => '20091225091010',
                'end_time' => '20091225121010',
                'start_time_remark' => '备注1',
                'end_time_remark' => '备注2',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'risk_fund' => [
                'name' => 'DEPOSIT',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'notify_url' => 'https://api.test.com',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'need_user_confirm' => true,
        ],
    ]): PromiseInterface;

    /**
     * 查询支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder#get
     */
    public function get(array $options = [
        'query' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'query_id' => '',
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
        ],
    ]): ResponseInterface;

    /**
     * 查询支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder#get
     */
    public function getAsync(array $options = [
        'query' => [
            'out_order_no' => '1234323JKHDFE1243252',
            'query_id' => '',
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
        ],
    ]): PromiseInterface;
}

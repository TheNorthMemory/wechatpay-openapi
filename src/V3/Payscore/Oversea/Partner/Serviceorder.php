<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Oversea\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Serviceorder\_out_order_no_ $_out_order_no_
 */
interface Serviceorder
{
    /**
     * 创建支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/oversea/partner/serviceorder
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'out_order_no' => '1234323JKHDFE1243252',
            'currency' => 'HKD',
            'service_introduction' => 'XX充电宝',
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
            'risk_fund' => [
                'name' => 'DEPOSIT',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
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
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'need_user_confirm' => true,
            'notify_url' => 'https://api.test.com',
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
        ],
    ]): ResponseInterface;

    /**
     * 创建支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/oversea/partner/serviceorder
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'out_order_no' => '1234323JKHDFE1243252',
            'currency' => 'HKD',
            'service_introduction' => 'XX充电宝',
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
            'risk_fund' => [
                'name' => 'DEPOSIT',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
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
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'need_user_confirm' => true,
            'notify_url' => 'https://api.test.com',
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
        ],
    ]): PromiseInterface;

    /**
     * 查询支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/oversea/partner/serviceorder#get
     */
    public function get(array $options = [
        'query' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'out_order_no' => '1234323JKHDFE1243252',
            'query_id' => '15646546545165651651',
        ],
    ]): ResponseInterface;

    /**
     * 查询支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/oversea/partner/serviceorder#get
     */
    public function getAsync(array $options = [
        'query' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'out_order_no' => '1234323JKHDFE1243252',
            'query_id' => '15646546545165651651',
        ],
    ]): PromiseInterface;
}

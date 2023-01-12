<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner;

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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_introduction' => 'XX充电宝',
            'post_payments' => [[
                'name' => '就餐费用',
                'description' => '就餐人均100元',
                'amount' => 40000,
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'count' => 2,
            ],],
            'risk_fund' => [
                'name' => 'DEPOSIT',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
            'time_range' => [
                'start_time' => '20091225091010',
                'start_time_remark' => '开始租借时间',
                'end_time' => '20091225121010',
                'end_time_remark' => '租借结束时间',
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'out_order_no' => '1234323JKHDFE1243252',
            'service_introduction' => 'XX充电宝',
            'post_payments' => [[
                'name' => '就餐费用',
                'description' => '就餐人均100元',
                'amount' => 40000,
                'count' => 4,
            ],],
            'post_discounts' => [[
                'name' => '满20减1元',
                'description' => '不与其他优惠叠加',
                'count' => 2,
            ],],
            'risk_fund' => [
                'name' => 'DEPOSIT',
                'amount' => 10000,
                'description' => '就餐的预估费用',
            ],
            'time_range' => [
                'start_time' => '20091225091010',
                'start_time_remark' => '开始租借时间',
                'end_time' => '20091225121010',
                'end_time_remark' => '租借结束时间',
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_2.shtml
     */
    public function get(array $options = [
        'query' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'out_order_no' => '1234323JKHDFE1243252',
            'query_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter6_2_2.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
            'out_order_no' => '1234323JKHDFE1243252',
            'query_id' => '',
        ],
    ]): PromiseInterface;
}

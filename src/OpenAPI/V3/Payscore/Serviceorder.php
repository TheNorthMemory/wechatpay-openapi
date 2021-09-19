<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Serviceorder\_out_order_no_ $_out_order_no_
 * @property-read Serviceorder\DirectComplete $directComplete
 */
interface Serviceorder
{
    /**
     * 创建支付分订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_1.shtml
     */
    public function post(array $options = [
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
            'service_introduction' => '某某酒店',
            'risk_fund' => [
                'name' => '',
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
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
            'service_introduction' => '某某酒店',
            'risk_fund' => [
                'name' => '',
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_2.shtml
     */
    public function get(array $options = [
        'query' => [
            'out_order_no' => '',
            'query_id' => '',
            'service_id' => '',
            'appid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询支付分订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'out_order_no' => '',
            'query_id' => '',
            'service_id' => '',
            'appid' => '',
        ],
    ]): PromiseInterface;
}

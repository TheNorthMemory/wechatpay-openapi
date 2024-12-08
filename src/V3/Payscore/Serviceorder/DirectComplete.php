<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Serviceorder;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface DirectComplete
{
    /**
     * 创单结单合并(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder/direct-complete
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
                'start_time' => '20091225091010',
                'start_time_remark' => '开始租借时间',
                'end_time' => '20091225121010',
                'end_time_remark' => '租借结束时间',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'service_introduction' => '某某酒店',
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'notify_url' => 'https://api.test.com',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'total_amount' => 50000,
            'profit_sharing' => true,
            'goods_tag' => '',
        ],
    ]): ResponseInterface;

    /**
     * 创单结单合并(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/serviceorder/direct-complete
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
                'start_time' => '20091225091010',
                'start_time_remark' => '开始租借时间',
                'end_time' => '20091225121010',
                'end_time_remark' => '租借结束时间',
            ],
            'location' => [
                'start_location' => '嗨客时尚主题展餐厅',
                'end_location' => '嗨客时尚主题展餐厅',
            ],
            'service_introduction' => '某某酒店',
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'notify_url' => 'https://api.test.com',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'total_amount' => 50000,
            'profit_sharing' => true,
            'goods_tag' => '',
        ],
    ]): PromiseInterface;
}

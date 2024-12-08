<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\SignPlan\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Serviceorder
{
    /**
     * 创建用户的签约计划详情对应的服务订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/sign-plan/partner/serviceorder
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sign_plan_id' => '01000033210000324638000000376258',
            'plan_detail_no' => 2,
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'notify_url' => 'https://api.test.com',
            'service_introduction' => '羽毛球课基础练习课程',
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
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'out_trade_no' => '1514323JSVDFE1243252',
        ],
    ]): ResponseInterface;

    /**
     * 创建用户的签约计划详情对应的服务订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/sign-plan/partner/serviceorder
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sign_plan_id' => '01000033210000324638000000376258',
            'plan_detail_no' => 2,
            'appid' => 'wxd678efh567hg6787',
            'sub_mchid' => '1900000109',
            'sub_appid' => 'wxd678efh567hg6999',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'sub_openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'notify_url' => 'https://api.test.com',
            'service_introduction' => '羽毛球课基础练习课程',
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
            'attach' => 'Easdfowealsdkjfnlaksjdlfkwqoi&wl3l2sald',
            'out_trade_no' => '1514323JSVDFE1243252',
        ],
    ]): PromiseInterface;
}

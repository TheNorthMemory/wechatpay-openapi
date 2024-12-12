<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardActivity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Activities\_activity_id_ $_activity_id_
 */
interface Activities
{
    /**
     * 创建活动(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-activity/activities
     */
    public function post(array $options = [
        'json' => [
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_name' => '良品铺子回馈活动',
            'activity_type' => 'NON_MEMBER_AFTERPAY',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
            'award_send_period' => [
                'award_send_time' => [[
                    'begin_time' => '2020-01-21T00:00:00.000+08:00',
                    'end_time' => '2020-01-27T00:00:00.000+08:00',
                ],],
                'award_send_day_time' => [[
                    'begin_day_time' => [
                        'hours' => 9,
                        'minutes' => 34,
                        'seconds' => 6,
                    ],
                    'end_day_time' => [
                        'hours' => 9,
                        'minutes' => 34,
                        'seconds' => 6,
                    ],
                ],],
            ],
            'stock_list' => [[
                'stock_creator_mchid' => '10000022',
                'stock_id' => '98065001',
            ],],
            'out_request_no' => '100002322019090134234sfdf',
            'pay_activity_setting' => [
                'logo_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
                'activity_second_title' => '湖南麻辣美食券',
                'mchid_list' => ['string'],
                'activate_setting' => [
                    'activate_type' => 'AUTO_ACTIVATE',
                    'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
                    'activate_miniprogram' => [
                        'activate_appid' => 'wxea9c30a90fs8d3fe',
                        'activate_path' => 'pages/activate/activate',
                    ],
                ],
                'payment_setting' => [
                    'payment_mode' => [
                        'payment_scene_list' => ['APP'],
                    ],
                    'limit_bank' => 'CFT',
                    'goods_tags' => ['string'],
                ],
            ],
            'miniprogram_activity_setting' => [
                'outer_str' => ['string'],
                'award_jump_deploy' => [
                    'mini_program_appid' => 'wxc0b84a53ed8e8d29',
                    'mini_program_path' => 'mall/pages/List',
                    'button_text' => '点击',
                ],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 创建活动(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-activity/activities
     */
    public function postAsync(array $options = [
        'json' => [
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_name' => '良品铺子回馈活动',
            'activity_type' => 'NON_MEMBER_AFTERPAY',
            'begin_time' => '2020-01-20T13:29:35.120+08:00',
            'end_time' => '2020-01-29T13:29:35.120+08:00',
            'award_send_period' => [
                'award_send_time' => [[
                    'begin_time' => '2020-01-21T00:00:00.000+08:00',
                    'end_time' => '2020-01-27T00:00:00.000+08:00',
                ],],
                'award_send_day_time' => [[
                    'begin_day_time' => [
                        'hours' => 9,
                        'minutes' => 34,
                        'seconds' => 6,
                    ],
                    'end_day_time' => [
                        'hours' => 9,
                        'minutes' => 34,
                        'seconds' => 6,
                    ],
                ],],
            ],
            'stock_list' => [[
                'stock_creator_mchid' => '10000022',
                'stock_id' => '98065001',
            ],],
            'out_request_no' => '100002322019090134234sfdf',
            'pay_activity_setting' => [
                'logo_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
                'activity_second_title' => '湖南麻辣美食券',
                'mchid_list' => ['string'],
                'activate_setting' => [
                    'activate_type' => 'AUTO_ACTIVATE',
                    'activate_url' => 'https://w.url.cn/s/Ahz3p2C',
                    'activate_miniprogram' => [
                        'activate_appid' => 'wxea9c30a90fs8d3fe',
                        'activate_path' => 'pages/activate/activate',
                    ],
                ],
                'payment_setting' => [
                    'payment_mode' => [
                        'payment_scene_list' => ['APP'],
                    ],
                    'limit_bank' => 'CFT',
                    'goods_tags' => ['string'],
                ],
            ],
            'miniprogram_activity_setting' => [
                'outer_str' => ['string'],
                'award_jump_deploy' => [
                    'mini_program_appid' => 'wxc0b84a53ed8e8d29',
                    'mini_program_path' => 'mall/pages/List',
                    'button_text' => '点击',
                ],
            ],
        ],
    ]): PromiseInterface;

    /**
     * 查询活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-activity/activities#get
     */
    public function get(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'activity_type' => 'NON_MEMBER_AFTERPAY',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_status' => 'ONGOING',
        ],
    ]): ResponseInterface;

    /**
     * 查询活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-activity/activities#get
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'activity_type' => 'NON_MEMBER_AFTERPAY',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'activity_status' => 'ONGOING',
        ],
    ]): PromiseInterface;
}

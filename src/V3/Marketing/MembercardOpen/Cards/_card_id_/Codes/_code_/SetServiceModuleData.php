<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\Codes\_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SetServiceModuleData
{
    /**
     * 设置会员服务项用户信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D/set-service-module-data
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
        'json' => [
            'out_request_no' => '100002322019090134234sfdf',
            'service_module_id' => '666',
            'state_setting' => [
                'state_id' => 'CHECKED_IN',
                'content_template_data' => [
                    'field_list' => [[
                        'field_id' => 'hotel_name',
                        'field_value' => '深圳市南山区滨海路700号',
                    ],],
                    'action_setting' => [
                        'action_name' => '一键开锁',
                        'jump_miniprogram' => [
                            'appid' => 'wx37178d097a6851d8',
                            'path' => 'pages/index/index',
                        ],
                    ],
                ],
                'message_template_setting' => [
                    'message_template_id' => '9bJgRNz9XG248XZ-a0nDKH3Vt_vaTp32fRP1LWvxjzI',
                    'field_list' => [[
                        'field_id' => 'hotel_name',
                        'field_value' => '深圳市南山区滨海路700号',
                    ],],
                ],
            ],
        ],
    ]): ResponseInterface;

    /**
     * 设置会员服务项用户信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/codes/%7Bcode%7D/set-service-module-data
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'code' => '478515832665',
        'json' => [
            'out_request_no' => '100002322019090134234sfdf',
            'service_module_id' => '666',
            'state_setting' => [
                'state_id' => 'CHECKED_IN',
                'content_template_data' => [
                    'field_list' => [[
                        'field_id' => 'hotel_name',
                        'field_value' => '深圳市南山区滨海路700号',
                    ],],
                    'action_setting' => [
                        'action_name' => '一键开锁',
                        'jump_miniprogram' => [
                            'appid' => 'wx37178d097a6851d8',
                            'path' => 'pages/index/index',
                        ],
                    ],
                ],
                'message_template_setting' => [
                    'message_template_id' => '9bJgRNz9XG248XZ-a0nDKH3Vt_vaTp32fRP1LWvxjzI',
                    'field_list' => [[
                        'field_id' => 'hotel_name',
                        'field_value' => '深圳市南山区滨海路700号',
                    ],],
                ],
            ],
        ],
    ]): PromiseInterface;
}

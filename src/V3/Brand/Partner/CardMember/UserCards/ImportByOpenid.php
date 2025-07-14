<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\UserCards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ImportByOpenid
{
    /**
     * 根据openid导入用户会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/import-by-openid
     */
    public function post(array $options = [
        'json' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_code' => '478515832665',
            'phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWY==',
            'user_information' => [
                'common_field_list' => [[
                    'name' => 'USER_FORM_FLAG_SEX | USER_FORM_FLAG_NAME | USER_FORM_FLAG_BIRTHDAY | USER_FORM_FLAG_ADDRESS',
                    'value' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWY==',
                ],],
                'custom_field_list' => [[
                    'name' => '喜欢的运动',
                    'user_chosen_values' => ['vvysDQeEaH3I+wRh14St0abIkvQyFgh/'],
                ],],
            ],
            'date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'pickup_time' => '2020-05-20T13:29:35.120+08:00',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 根据openid导入用户会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/import-by-openid
     */
    public function postAsync(array $options = [
        'json' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'user_card_code' => '478515832665',
            'phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWY==',
            'user_information' => [
                'common_field_list' => [[
                    'name' => 'USER_FORM_FLAG_SEX | USER_FORM_FLAG_NAME | USER_FORM_FLAG_BIRTHDAY | USER_FORM_FLAG_ADDRESS',
                    'value' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWY==',
                ],],
                'custom_field_list' => [[
                    'name' => '喜欢的运动',
                    'user_chosen_values' => ['vvysDQeEaH3I+wRh14St0abIkvQyFgh/'],
                ],],
            ],
            'date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'pickup_time' => '2020-05-20T13:29:35.120+08:00',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}

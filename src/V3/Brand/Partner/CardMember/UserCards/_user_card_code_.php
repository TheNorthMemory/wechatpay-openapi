<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\CardMember\UserCards;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _user_card_code_\Confirm $confirm
 * @property-read _user_card_code_\Invalidate $invalidate
 */
interface _user_card_code_
{
    /**
     * 查询用户会员卡信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/%7Buser_card_code%7D
     */
    public function get(array $options = [
        'user_card_code' => '478515832665',
        'query' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户会员卡信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/%7Buser_card_code%7D
     */
    public function getAsync(array $options = [
        'user_card_code' => '478515832665',
        'query' => [
            'brand_id' => '1004',
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
        ],
    ]): PromiseInterface;

    /**
     * 修改用户会员卡信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/%7Buser_card_code%7D#patch
     */
    public function patch(array $options = [
        'user_card_code' => '478515832665',
        'json' => [
            'brand_id' => '1004',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'card_color' => '#FFFF00',
            'card_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWY==',
            'level' => '钻石会员',
            'valid_date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'pickup_time' => '2020-05-20T13:29:35.120+08:00',
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
            'attach' => '自定义数据说明',
        ],
        'query' => [
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        ],
    ]): ResponseInterface;

    /**
     * 修改用户会员卡信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/card-member/user-cards/%7Buser_card_code%7D#patch
     */
    public function patchAsync(array $options = [
        'user_card_code' => '478515832665',
        'json' => [
            'brand_id' => '1004',
            'openid' => 'obLatjnx9gnqzS4myYGmLZ7LgLBA',
            'card_color' => '#FFFF00',
            'card_picture_url' => 'https://wxpaylogo.qpic.cn/wxpaylogo/xxxxx/0',
            'phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWY==',
            'level' => '钻石会员',
            'valid_date_information' => [
                'type' => 'FIX_TIME_RANGE | FIX_TERM | PERMANENT',
                'available_begin_time' => '2020-05-20T13:29:35.120+08:00',
                'available_end_time' => '2030-05-20T13:29:35.120+08:00',
                'available_day_after_receive' => 200,
            ],
            'pickup_time' => '2020-05-20T13:29:35.120+08:00',
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
            'attach' => '自定义数据说明',
        ],
        'query' => [
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        ],
    ]): PromiseInterface;
}

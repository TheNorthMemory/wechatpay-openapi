<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\PhonenumberMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Import
{
    /**
     * 导入加密手机号提醒会员领卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/phonenumber-member/import
     */
    public function post(array $options = [
        'json' => [
            'member_information' => [
                'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
                'code' => '478515832665',
                'membership_number' => '316510891298',
                'registration_time' => '2015-05-20T13:29:35.120+08:00',
            ],
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWYSs2bLtG9tj+bdJn4WSCPzqSyXnFbzaaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
            'outer_str' => 'my_card_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 导入加密手机号提醒会员领卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/phonenumber-member/import
     */
    public function postAsync(array $options = [
        'json' => [
            'member_information' => [
                'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
                'code' => '478515832665',
                'membership_number' => '316510891298',
                'registration_time' => '2015-05-20T13:29:35.120+08:00',
            ],
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWYSs2bLtG9tj+bdJn4WSCPzqSyXnFbzaaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
            'outer_str' => 'my_card_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\PhonenumberMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Search
{
    /**
     * 通过加密手机号查询会员领卡状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/phonenumber-member/search
     */
    public function get(array $options = [
        'query' => [
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWYSs2bLtG9tj+bdJn4WSCPzLyXnFbzaaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 通过加密手机号查询会员领卡状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/phonenumber-member/search
     */
    public function getAsync(array $options = [
        'query' => [
            'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWYSs2bLtG9tj+bdJn4WSCPzLyXnFbzaaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}

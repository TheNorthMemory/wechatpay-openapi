<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\Cards\_card_id_\PhoneMembercard;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Import
{
    /**
     * 根据手机号导入用户会员卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/phone-membercard/import
     */
    public function post(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0aaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
            'code' => '478515832665',
            'out_request_no' => '100002322019090134234sfdf',
        ],
    ]): ResponseInterface;

    /**
     * 根据手机号导入用户会员卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/membercard-open/cards/%7Bcard_id%7D/phone-membercard/import
     */
    public function postAsync(array $options = [
        'card_id' => 'pbLatjvWOibDc5-TBnbUk1pD12o0',
        'json' => [
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0aaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
            'code' => '478515832665',
            'out_request_no' => '100002322019090134234sfdf',
        ],
    ]): PromiseInterface;
}

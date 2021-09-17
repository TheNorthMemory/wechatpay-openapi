<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\MembercardOpen\PhonenumberMember;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Import
{
    /**
     * 导入加密手机号提醒会员领卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'member_information' => [],
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWYSs2bLtG9tj+bdJn4WSCPzqSyXnFbzaaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
            'outer_str' => 'my_card_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 导入加密手机号提醒会员领卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/membercard_open/chapter4_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'member_information' => [],
            'encrypted_phone_number' => 'vvysDQeEaH3I+wRh14St0abIkvQyFgh/fbWYSs2bLtG9tj+bdJn4WSCPzqSyXnFbzaaKSE2j4mAFON3kzNexb/SYkHZNJAuCittaW4wpGj7U+h9A==',
            'outer_str' => 'my_card_CARD',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}

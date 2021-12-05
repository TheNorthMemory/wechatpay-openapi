<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Tokens
{
    /**
     * 生成授权token (同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'openid' => '9x111111',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'user_name' => 'LP7bT4hQXUsOZCEvK2YrSiqFsnP0oRMfeoLN0vBg',
            'id_card_number' => '7FzH5XksJG3a8HLLsaaUV6K54y1OnPMY5',
            'employment_type' => 'LONG_TERM_EMPLOYMENT',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): ResponseInterface;

    /**
     * 生成授权token (异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'openid' => '9x111111',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
            'sub_mchid' => '1111111',
            'user_name' => 'LP7bT4hQXUsOZCEvK2YrSiqFsnP0oRMfeoLN0vBg',
            'id_card_number' => '7FzH5XksJG3a8HLLsaaUV6K54y1OnPMY5',
            'employment_type' => 'LONG_TERM_EMPLOYMENT',
        ],
        'headers' => [
            'Wechatpay-Serial' => '',
        ],
    ]): PromiseInterface;
}

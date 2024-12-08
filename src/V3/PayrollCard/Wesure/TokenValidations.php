<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Wesure;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TokenValidations
{
    /**
     * 校验核身结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/wesure/token-validations
     */
    public function post(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'token' => 'abcdefghijklmn',
            'user_name' => 'LP7bT4hQXUsOZCEvK2YrSiqFsnP0oRMfeoLN0vBg',
            'id_card_number' => '7FzH5XksJG3a8HLLsaaUV6K54y1OnPMY5',
            'authenticate_type' => 'NORMAL',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 校验核身结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payroll-card/wesure/token-validations
     */
    public function postAsync(array $options = [
        'json' => [
            'sp_mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'token' => 'abcdefghijklmn',
            'user_name' => 'LP7bT4hQXUsOZCEvK2YrSiqFsnP0oRMfeoLN0vBg',
            'id_card_number' => '7FzH5XksJG3a8HLLsaaUV6K54y1OnPMY5',
            'authenticate_type' => 'NORMAL',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}

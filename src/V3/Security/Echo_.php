<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Security;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Echo_
{
    /**
     * 商户签名验签／加解密测试(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/security/echo
     */
    public function post(array $options = [
        'json' => [
            'notify_url' => 'https://www.weixin.qq.com/v3/test',
            'echo_message' => '',
            'encrypted_echo_message' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 商户签名验签／加解密测试(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/security/echo
     */
    public function postAsync(array $options = [
        'json' => [
            'notify_url' => 'https://www.weixin.qq.com/v3/test',
            'echo_message' => '',
            'encrypted_echo_message' => '',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}

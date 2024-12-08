<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Sandboxnew\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getsignkey
{
    /**
     * 获取验签密钥(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2022.05.31
     * @link https://wechatpay.im/openapi/v2/sandboxnew/pay/getsignkey
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 获取验签密钥(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2022.05.31
     * @link https://wechatpay.im/openapi/v2/sandboxnew/pay/getsignkey
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
        ],
    ]): PromiseInterface;
}

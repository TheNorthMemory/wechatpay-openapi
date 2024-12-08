<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Risk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getcertficates
{
    /**
     * 获取平台证书(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/risk/getcertficates
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 获取平台证书(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/risk/getcertficates
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}

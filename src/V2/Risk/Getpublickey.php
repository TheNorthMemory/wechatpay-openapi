<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Risk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getpublickey
{
    /**
     * 获取RSA加密公钥(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/risk/getpublickey
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sign_type' => 'MD5',
        ],
        'security' => true,
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): ResponseInterface;

    /**
     * 获取RSA加密公钥(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/risk/getpublickey
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sign_type' => 'MD5',
        ],
        'security' => true,
        'base_uri' => 'https://fraud.mch.weixin.qq.com/',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Certificates
{
    /**
     * 获取平台证书列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/certificates
     */
    public function get(array $options = [
        'query' => [
            'algorithm_type' => 'SM2 | RSA | ALL',
        ],
    ]): ResponseInterface;

    /**
     * 获取平台证书列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/certificates
     */
    public function getAsync(array $options = [
        'query' => [
            'algorithm_type' => 'SM2 | RSA | ALL',
        ],
    ]): PromiseInterface;
}

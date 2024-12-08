<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Applyment\Micro;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Getstate
{
    /**
     * 查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.05.23
     * @link https://wechatpay.im/openapi/v2/applyment/micro/getstate
     */
    public function post(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'applyment_id' => '1230000109',
            'business_code' => '123456',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2023.05.23
     * @link https://wechatpay.im/openapi/v2/applyment/micro/getstate
     */
    public function postAsync(array $options = [
        'xml' => [
            'version' => '1.0',
            'mch_id' => '1230000109',
            'sign_type' => 'HMAC-SHA256',
            'applyment_id' => '1230000109',
            'business_code' => '123456',
        ],
        'security' => true,
    ]): PromiseInterface;
}

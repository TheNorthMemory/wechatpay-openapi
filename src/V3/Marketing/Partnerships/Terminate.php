<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partnerships;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 终止合作关系(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partnerships/terminate
     */
    public function post(array $options = [
        'json' => [
            'partner' => [
                'type' => 'APPID | MERCHANT',
                'appid' => 'wx4e1916a585d1f4e9',
                'merchant_id' => '2480029552',
            ],
            'authorized_data' => [
                'business_type' => 'FAVOR_STOCK | BUSIFAVOR_STOCK',
                'stock_id' => '2433405',
            ],
        ],
        'headers' => [
            'Idempotency-Key' => '12345',
        ],
    ]): ResponseInterface;

    /**
     * 终止合作关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partnerships/terminate
     */
    public function postAsync(array $options = [
        'json' => [
            'partner' => [
                'type' => 'APPID | MERCHANT',
                'appid' => 'wx4e1916a585d1f4e9',
                'merchant_id' => '2480029552',
            ],
            'authorized_data' => [
                'business_type' => 'FAVOR_STOCK | BUSIFAVOR_STOCK',
                'stock_id' => '2433405',
            ],
        ],
        'headers' => [
            'Idempotency-Key' => '12345',
        ],
    ]): PromiseInterface;
}

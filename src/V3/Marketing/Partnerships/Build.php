<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partnerships;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Build
{
    /**
     * 建立合作关系(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partnerships/build
     */
    public function post(array $options = [
        'json' => [
            'partner' => [
                'type' => 'APPID | MERCHANT',
                'appid' => '',
                'merchant_id' => '',
            ],
            'authorized_data' => [
                'business_type' => 'FAVOR_STOCK | BUSIFAVOR_STOCK',
                'stock_id' => '',
            ],
        ],
        'headers' => [
            'Idempotency-Key' => '',
        ],
    ]): ResponseInterface;

    /**
     * 建立合作关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partnerships/build
     */
    public function postAsync(array $options = [
        'json' => [
            'partner' => [
                'type' => 'APPID | MERCHANT',
                'appid' => '',
                'merchant_id' => '',
            ],
            'authorized_data' => [
                'business_type' => 'FAVOR_STOCK | BUSIFAVOR_STOCK',
                'stock_id' => '',
            ],
        ],
        'headers' => [
            'Idempotency-Key' => '',
        ],
    ]): PromiseInterface;
}

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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/partnerships/chapter3_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'partner' => [
                'type' => '',
                'appid' => '',
                'merchant_id' => '',
            ],
            'authorized_data' => [
                'business_type' => '',
                'stock_id' => '',
            ],
        ],
        'headers' => [
            'Idempotency-Key' => '',
        ],
    ]): ResponseInterface;

    /**
     * 终止合作关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/partnerships/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'partner' => [
                'type' => '',
                'appid' => '',
                'merchant_id' => '',
            ],
            'authorized_data' => [
                'business_type' => '',
                'stock_id' => '',
            ],
        ],
        'headers' => [
            'Idempotency-Key' => '',
        ],
    ]): PromiseInterface;
}

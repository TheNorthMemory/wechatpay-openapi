<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\Store\Brandstores\_store_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unbindrecipient
{
    /**
     * 解绑收款商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D/unbindrecipient
     */
    public function post(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
            'mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 解绑收款商户号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D/unbindrecipient
     */
    public function postAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
            'mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}

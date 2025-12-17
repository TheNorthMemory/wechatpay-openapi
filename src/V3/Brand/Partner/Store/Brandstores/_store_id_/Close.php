<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Partner\Store\Brandstores\_store_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 暂停门店营业(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D/close
     */
    public function post(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
        ],
    ]): ResponseInterface;

    /**
     * 暂停门店营业(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/partner/store/brandstores/%7Bstore_id%7D/close
     */
    public function postAsync(array $options = [
        'store_id' => '20488000',
        'json' => [
            'brand_id' => '123456789',
        ],
    ]): PromiseInterface;
}

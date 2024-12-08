<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\Taxies;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _plate_number_
{
    /**
     * 获取出租车信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/taxies/%7Bplate_number%7D
     */
    public function get(array $options = [
        'plate_number' => '粤B12345',
        'query' => [
            'region_id' => 510100,
        ],
    ]): ResponseInterface;

    /**
     * 获取出租车信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/taxies/%7Bplate_number%7D
     */
    public function getAsync(array $options = [
        'plate_number' => '粤B12345',
        'query' => [
            'region_id' => 510100,
        ],
    ]): PromiseInterface;
}

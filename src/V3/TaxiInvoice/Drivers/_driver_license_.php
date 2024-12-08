<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice\Drivers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _driver_license_
{
    /**
     * 获取司机信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/drivers/%7Bdriver_license%7D
     */
    public function get(array $options = [
        'driver_license' => '6298416',
        'query' => [
            'region_id' => 510100,
        ],
    ]): ResponseInterface;

    /**
     * 获取司机信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/drivers/%7Bdriver_license%7D
     */
    public function getAsync(array $options = [
        'driver_license' => '6298416',
        'query' => [
            'region_id' => 510100,
        ],
    ]): PromiseInterface;
}

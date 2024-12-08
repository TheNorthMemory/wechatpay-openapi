<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TaxiInvoice;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UserTaxiOrders
{
    /**
     * 获取乘客行程单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/user-taxi-orders
     */
    public function get(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'openid' => 'oUypO5fUvaUkyuc6ueOwgwDMjCiM',
            'appid' => 'wxb1170446a4c0a5a2',
            'begin_date' => '20200307',
            'end_date' => '20200407',
            'region_id' => 510100,
        ],
    ]): ResponseInterface;

    /**
     * 获取乘客行程单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/taxi-invoice/user-taxi-orders
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
            'openid' => 'oUypO5fUvaUkyuc6ueOwgwDMjCiM',
            'appid' => 'wxb1170446a4c0a5a2',
            'begin_date' => '20200307',
            'end_date' => '20200407',
            'region_id' => 510100,
        ],
    ]): PromiseInterface;
}

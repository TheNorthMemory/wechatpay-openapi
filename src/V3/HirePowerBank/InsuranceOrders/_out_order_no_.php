<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\HirePowerBank\InsuranceOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_order_no_
{
    /**
     * 查询保险订单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/hire-power-bank/insurance-orders/%7Bout_order_no%7D
     */
    public function get(array $options = [
        'out_order_no' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): ResponseInterface;

    /**
     * 查询保险订单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/hire-power-bank/insurance-orders/%7Bout_order_no%7D
     */
    public function getAsync(array $options = [
        'out_order_no' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): PromiseInterface;
}

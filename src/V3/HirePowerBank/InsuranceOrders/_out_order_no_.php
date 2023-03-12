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
     * @link https://pay.weixin.qq.com/docs/merchant/apis/hire-power-bank-insurance/insurance-orders/get-by-out-trade-no.html
     */
    public function get(array $options = [
        'out_order_no' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): ResponseInterface;

    /**
     * 查询保险订单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/hire-power-bank-insurance/insurance-orders/get-by-out-trade-no.html#async
     */
    public function getAsync(array $options = [
        'out_order_no' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): PromiseInterface;
}

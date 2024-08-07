<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _combine_out_trade_no_\Close $close
 */
interface _combine_out_trade_no_
{
    /**
     * 合单查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/combine-payment/orders/query-order.html
     */
    public function get(array $options = [
        'combine_out_trade_no' => '',
    ]): ResponseInterface;

    /**
     * 合单查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/combine-payment/orders/query-order.html#async
     */
    public function getAsync(array $options = [
        'combine_out_trade_no' => '',
    ]): PromiseInterface;
}

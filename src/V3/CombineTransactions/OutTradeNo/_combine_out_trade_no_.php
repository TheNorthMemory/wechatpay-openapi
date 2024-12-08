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
     * @link https://wechatpay.im/openapi/v3/combine-transactions/out-trade-no/%7Bcombine_out_trade_no%7D
     */
    public function get(array $options = [
        'combine_out_trade_no' => 'P20150806125346',
    ]): ResponseInterface;

    /**
     * 合单查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/combine-transactions/out-trade-no/%7Bcombine_out_trade_no%7D
     */
    public function getAsync(array $options = [
        'combine_out_trade_no' => 'P20150806125346',
    ]): PromiseInterface;
}

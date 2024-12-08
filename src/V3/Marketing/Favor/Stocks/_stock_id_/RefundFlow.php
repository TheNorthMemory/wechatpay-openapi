<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface RefundFlow
{
    /**
     * 下载批次退款明细(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/refund-flow
     */
    public function get(array $options = [
        'stock_id' => '',
    ]): ResponseInterface;

    /**
     * 下载批次退款明细(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/refund-flow
     */
    public function getAsync(array $options = [
        'stock_id' => '',
    ]): PromiseInterface;
}

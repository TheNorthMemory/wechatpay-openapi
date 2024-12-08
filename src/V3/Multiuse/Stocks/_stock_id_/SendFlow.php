<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Multiuse\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface SendFlow
{
    /**
     * 下载批次发放明细(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/multiuse/stocks/%7Bstock_id%7D/send-flow
     */
    public function get(array $options = [
        'stock_id' => '9856888',
    ]): ResponseInterface;

    /**
     * 下载批次发放明细(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/multiuse/stocks/%7Bstock_id%7D/send-flow
     */
    public function getAsync(array $options = [
        'stock_id' => '9856888',
    ]): PromiseInterface;
}

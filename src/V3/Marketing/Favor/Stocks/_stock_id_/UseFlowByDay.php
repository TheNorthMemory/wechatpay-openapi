<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface UseFlowByDay
{
    /**
     * 获取批次核销明细下载链接(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/use-flow-by-day
     */
    public function get(array $options = [
        'stock_id' => '12356458',
        'query' => [
            'bill_date' => '2025-08-09',
        ],
    ]): ResponseInterface;

    /**
     * 获取批次核销明细下载链接(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/use-flow-by-day
     */
    public function getAsync(array $options = [
        'stock_id' => '12356458',
        'query' => [
            'bill_date' => '2025-08-09',
        ],
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Merchants
{
    /**
     * 查询代金券可用商户(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/merchants
     */
    public function get(array $options = [
        'stock_id' => '',
        'query' => [
            'offset' => 0,
            'limit' => '',
            'stock_creator_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券可用商户(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/merchants
     */
    public function getAsync(array $options = [
        'stock_id' => '',
        'query' => [
            'offset' => 0,
            'limit' => '',
            'stock_creator_mchid' => '',
        ],
    ]): PromiseInterface;
}

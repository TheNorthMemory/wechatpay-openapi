<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks\_stock_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Items
{
    /**
     * 查询代金券可用单品(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/items
     */
    public function get(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
            'offset' => 0,
            'limit' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券可用单品(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D/items
     */
    public function getAsync(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
            'offset' => 0,
            'limit' => '',
        ],
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Favor\Stocks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _stock_id_\Items $items
 * @property-read _stock_id_\Merchants $merchants
 * @property-read _stock_id_\Pause $pause
 * @property-read _stock_id_\RefundFlow $refundFlow
 * @property-read _stock_id_\Restart $restart
 * @property-read _stock_id_\Start $start
 * @property-read _stock_id_\UseFlow $useFlow
 */
interface _stock_id_
{
    /**
     * 查询批次详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D
     */
    public function get(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询批次详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/favor/stocks/%7Bstock_id%7D
     */
    public function getAsync(array $options = [
        'stock_id' => '',
        'query' => [
            'stock_creator_mchid' => '',
        ],
    ]): PromiseInterface;
}

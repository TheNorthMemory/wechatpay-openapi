<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Etc\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function get(array $options = [
        'out_trade_no' => '121775250124070332',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/etc/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function getAsync(array $options = [
        'out_trade_no' => '121775250124070332',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

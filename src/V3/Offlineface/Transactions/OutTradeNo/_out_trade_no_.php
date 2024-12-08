<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 查单接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function get(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
        'query' => [
            'sp_mchid' => '198798777',
            'sub_mchid' => '3233122121',
            'business_product_id' => '2',
        ],
    ]): ResponseInterface;

    /**
     * 查单接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function getAsync(array $options = [
        'out_trade_no' => '1217752501201407033233368018',
        'query' => [
            'sp_mchid' => '198798777',
            'sub_mchid' => '3233122121',
            'business_product_id' => '2',
        ],
    ]): PromiseInterface;
}

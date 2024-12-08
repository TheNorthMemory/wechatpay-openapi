<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_trade_no_\Close $close
 * @property-read _out_trade_no_\Reverse $reverse
 */
interface _out_trade_no_
{
    /**
     * 商户订单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function get(array $options = [
        'out_trade_no' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 商户订单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay/partner/transactions/out-trade-no/%7Bout_trade_no%7D
     */
    public function getAsync(array $options = [
        'out_trade_no' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
        ],
    ]): PromiseInterface;
}

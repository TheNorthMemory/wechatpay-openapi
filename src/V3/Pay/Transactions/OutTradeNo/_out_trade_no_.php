<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_trade_no_\Close $close
 */
interface _out_trade_no_
{
    /**
     * 商户订单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter3_5.shtml
     */
    public function get(array $options = [
        'out_trade_no' => '',
        'query' => [
            'mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 商户订单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'out_trade_no' => '',
        'query' => [
            'mchid' => '',
        ],
    ]): PromiseInterface;
}

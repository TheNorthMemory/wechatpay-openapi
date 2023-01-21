<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\DiscountCard\Orders\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 通过先享卡订单号查询订单(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Thu Mar 26 2020 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_1.shtml
     */
    public function get(array $options = [
        'out_trade_no' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): ResponseInterface;

    /**
     * 通过先享卡订单号查询订单(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since Thu Mar 26 2020 08:00:00 GMT+0800 (China Standard Time)
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/payscore/discount-card/chapter3_1.shtml#async
     */
    public function getAsync(array $options = [
        'out_trade_no' => '6e8369071cd942c0476613f9d1ce9ca3',
    ]): PromiseInterface;
}

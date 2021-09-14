<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CombineTransactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _combine_out_trade_no_\Close $close
 */
interface _combine_out_trade_no_
{
    /**
     * 合单查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_3.shtml
     */
    public function get(array $options = [
        'combine_out_trade_no' => '',
    ]): ResponseInterface;

    /**
     * 合单查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/combine/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'combine_out_trade_no' => '',
    ]): PromiseInterface;
}

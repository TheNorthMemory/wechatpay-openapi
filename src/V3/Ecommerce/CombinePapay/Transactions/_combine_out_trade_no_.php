<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\CombinePapay\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _combine_out_trade_no_\Reverse $reverse
 */
interface _combine_out_trade_no_
{
    /**
     * 电商合单委托代扣查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter5_5_6.shtml
     */
    public function get(array $options = [
        'combine_out_trade_no' => 'P20150806125346',
    ]): ResponseInterface;

    /**
     * 电商合单委托代扣查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter5_5_6.shtml#async
     */
    public function getAsync(array $options = [
        'combine_out_trade_no' => 'P20150806125346',
    ]): PromiseInterface;
}

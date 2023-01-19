<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\EduPapay\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 商户订单号查单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_9.shtml
     */
    public function get(array $options = [
        'out_trade_no' => '201407033233368018',
    ]): ResponseInterface;

    /**
     * 商户订单号查单(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/Offline/apis/chapter5_2_9.shtml#async
     */
    public function getAsync(array $options = [
        'out_trade_no' => '201407033233368018',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Partner\Transactions\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read _out_trade_no_\Close $close
 */
interface _out_trade_no_
{
    /**
     * 商户订单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter5_5.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter5_5.shtml#async
     */
    public function getAsync(array $options = [
        'out_trade_no' => '',
        'query' => [
            'sp_mchid' => '',
            'sub_mchid' => '',
        ],
    ]): PromiseInterface;
}

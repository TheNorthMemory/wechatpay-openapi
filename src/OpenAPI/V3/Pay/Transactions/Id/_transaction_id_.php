<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Pay\Transactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _transaction_id_
{
    /**
     * 微信支付订单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter3_5.shtml
     */
    public function get(array $options = [
        'transaction_id' => '',
        'query' => [
            'mchid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付订单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transactions/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'transaction_id' => '',
        'query' => [
            'mchid' => '',
        ],
    ]): PromiseInterface;
}

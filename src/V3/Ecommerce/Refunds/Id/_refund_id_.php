<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _refund_id_
{
    /**
     * 通过微信支付退款单号查询退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/refunds/chapter3_2.shtml
     */
    public function get(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过微信支付退款单号查询退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/refunds/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'refund_id' => '50000000382019052709732678859',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

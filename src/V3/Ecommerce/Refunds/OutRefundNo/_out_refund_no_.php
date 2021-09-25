<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds\OutRefundNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_refund_no_
{
    /**
     * 通过商户退款单号查询退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/refunds/chapter3_2.shtml
     */
    public function get(array $options = [
        'out_refund_no' => '1217752501201407033233368018',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过商户退款单号查询退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/refunds/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'out_refund_no' => '1217752501201407033233368018',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

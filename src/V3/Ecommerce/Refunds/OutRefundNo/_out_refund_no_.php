<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds\OutRefundNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_refund_no_
{
    /**
     * 通过商户退款单号查询退款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/query-refund-by-out-refund-no.html
     */
    public function get(array $options = [
        'out_refund_no' => '1217752501201407033233368018',
        'query' => [
            'individual_auth_id' => '1900000109',
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过商户退款单号查询退款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-refund/refunds/query-refund-by-out-refund-no.html#async
     */
    public function getAsync(array $options = [
        'out_refund_no' => '1217752501201407033233368018',
        'query' => [
            'individual_auth_id' => '1900000109',
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

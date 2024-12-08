<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refunds\OutRefundNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_refund_no_
{
    /**
     * 查询单笔退款(商户退款订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refunds/out-refund-no/%7Bout_refund_no%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'out_refund_no' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
        ],
    ]): ResponseInterface;

    /**
     * 查询单笔退款(商户退款订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/refunds/out-refund-no/%7Bout_refund_no%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'out_refund_no' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
        ],
    ]): PromiseInterface;
}

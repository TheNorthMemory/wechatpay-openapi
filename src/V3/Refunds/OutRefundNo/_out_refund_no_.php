<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Refunds\OutRefundNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_refund_no_
{
    /**
     * 查询单笔退款(商户退款订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_3.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/api/wxpay/ch/fusion_wallet_ch/QuickPay/chapter8_3.shtml#async
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

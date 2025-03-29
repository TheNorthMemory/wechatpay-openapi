<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\Refund\Partner\RechargeBalance\SubMchid;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 商家充值退款余额查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/refund/partner/recharge-balance/sub-mchid/%7Bsub_mchid%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 商家充值退款余额查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/refund/partner/recharge-balance/sub-mchid/%7Bsub_mchid%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}

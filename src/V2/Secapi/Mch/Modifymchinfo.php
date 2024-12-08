<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Modifymchinfo
{
    /**
     * 银行特约商户信息修改(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/modifymchinfo
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1230000109',
            'sub_mch_id' => '11111111',
            'merchant_shortname' => '商户简称',
            'service_phone' => '075586010000',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 银行特约商户信息修改(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/modifymchinfo
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1230000109',
            'sub_mch_id' => '11111111',
            'merchant_shortname' => '商户简称',
            'service_phone' => '075586010000',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}

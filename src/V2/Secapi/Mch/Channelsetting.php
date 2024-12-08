<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Secapi\Mch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Channelsetting
{
    /**
     * 银行服务商特约子商户指定渠道号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/channelsetting
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx931386123456789e',
            'mch_id' => '1451234567',
            'sub_mch_id' => '10000101',
            'channel_id' => '10000102',
        ],
        'nonceless' => true,
        'security' => true,
    ]): ResponseInterface;

    /**
     * 银行服务商特约子商户指定渠道号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/secapi/mch/channelsetting
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx931386123456789e',
            'mch_id' => '1451234567',
            'sub_mch_id' => '10000101',
            'channel_id' => '10000102',
        ],
        'nonceless' => true,
        'security' => true,
    ]): PromiseInterface;
}

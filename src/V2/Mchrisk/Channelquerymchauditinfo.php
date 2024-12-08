<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Channelquerymchauditinfo
{
    /**
     * 渠道商查询商户审核信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/channelquerymchauditinfo
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '999990016',
            'acquiring_bank_id' => '999990017',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 渠道商查询商户审核信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/channelquerymchauditinfo
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '999990016',
            'acquiring_bank_id' => '999990017',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}

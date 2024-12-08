<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mchrisk;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Bankquerymchauditinfo
{
    /**
     * 间联模式查询商户审核状态开放接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/bankquerymchauditinfo
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '999990016',
            'channel_id' => '999990017',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 间联模式查询商户审核状态开放接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mchrisk/bankquerymchauditinfo
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '999990016',
            'channel_id' => '999990017',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}

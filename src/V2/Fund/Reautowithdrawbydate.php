<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Fund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Reautowithdrawbydate
{
    /**
     * 重新发起提现(同步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.04.13
     * @link https://wechatpay.im/openapi/v2/fund/reautowithdrawbydate
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'date' => '20180602',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 重新发起提现(异步模式)
     * @param array<string,mixed> $options
     * @deprecated - since 2020.04.13
     * @link https://wechatpay.im/openapi/v2/fund/reautowithdrawbydate
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000109',
            'sub_mch_id' => '1900000109',
            'date' => '20180602',
            'sign_type' => 'HMAC-SHA256',
        ],
        'security' => true,
    ]): PromiseInterface;
}

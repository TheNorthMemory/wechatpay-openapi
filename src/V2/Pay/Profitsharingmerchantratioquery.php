<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Profitsharingmerchantratioquery
{
    /**
     * 查询最大分账比例(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingmerchantratioquery
     */
    public function post(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'brand_mch_id' => '1900000108',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): ResponseInterface;

    /**
     * 查询最大分账比例(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/profitsharingmerchantratioquery
     */
    public function postAsync(array $options = [
        'xml' => [
            'mch_id' => '1900000100',
            'sub_mch_id' => '1900000109',
            'brand_mch_id' => '1900000108',
            'sign_type' => 'HMAC-SHA256',
        ],
    ]): PromiseInterface;
}

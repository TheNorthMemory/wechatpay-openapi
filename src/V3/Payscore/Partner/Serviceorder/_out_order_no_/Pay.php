<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Partner\Serviceorder\_out_order_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Pay
{
    /**
     * 商户发起催收扣款(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/serviceorder/%7Bout_order_no%7D/pay
     */
    public function post(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 商户发起催收扣款(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/partner/serviceorder/%7Bout_order_no%7D/pay
     */
    public function postAsync(array $options = [
        'out_order_no' => '1234323JKHDFE1243252',
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

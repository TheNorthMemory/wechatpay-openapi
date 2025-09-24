<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Merchantnamealterapplyment\_apply_id_ $_apply_id_
 * @property-read Merchantnamealterapplyment\Merchant $merchant
 */
interface Merchantnamealterapplyment
{
    /**
     * 提交商户简称变更申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/merchantnamealterapplyment
     */
    public function post(array $options = [
        'json' => [
            'merchant_code' => '2492185251',
            'out_request_no' => '1900013511_10000',
            'merchant_shortname' => 'example_merchant_shortname',
        ],
    ]): ResponseInterface;

    /**
     * 提交商户简称变更申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/merchantnamealterapplyment
     */
    public function postAsync(array $options = [
        'json' => [
            'merchant_code' => '2492185251',
            'out_request_no' => '1900013511_10000',
            'merchant_shortname' => 'example_merchant_shortname',
        ],
    ]): PromiseInterface;
}

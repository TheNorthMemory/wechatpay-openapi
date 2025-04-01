<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply\Mchsubjectalterapplyment\Merchant\_merchant_code_\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 查询申请单状态-使用业务单号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchsubjectalterapplyment/merchant/%7Bmerchant_code%7D/out-request-no/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'merchant_code' => '1900006491',
        'out_request_no' => '1900013511_10000',
    ]): ResponseInterface;

    /**
     * 查询申请单状态-使用业务单号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/mchsubjectalterapplyment/merchant/%7Bmerchant_code%7D/out-request-no/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'merchant_code' => '1900006491',
        'out_request_no' => '1900013511_10000',
    ]): PromiseInterface;
}

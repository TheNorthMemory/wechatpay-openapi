<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Mchalterapply\Merchantnamealterapplyment\Merchant\_sub_mchid_\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 查询商户简称申请单状态-使用业务单号和商户号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/merchantnamealterapplyment/merchant/%7Bsub_mchid%7D/out-request-no/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'sub_mchid' => '1900006491',
        'out_request_no' => '1900013511_10000',
    ]): ResponseInterface;

    /**
     * 查询商户简称申请单状态-使用业务单号和商户号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/mchalterapply/merchantnamealterapplyment/merchant/%7Bsub_mchid%7D/out-request-no/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900006491',
        'out_request_no' => '1900013511_10000',
    ]): PromiseInterface;
}

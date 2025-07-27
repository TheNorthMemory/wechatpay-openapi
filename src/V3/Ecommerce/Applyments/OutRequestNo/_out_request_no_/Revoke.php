<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments\OutRequestNo\_out_request_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Revoke
{
    /**
     * 撤销申请单-使用业务申请编号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/out-request-no/%7Bout_request_no%7D/revoke
     */
    public function post(array $options = [
        'out_request_no' => 'APPLYMENT_00000000001',
    ]): ResponseInterface;

    /**
     * 撤销申请单-使用业务申请编号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/out-request-no/%7Bout_request_no%7D/revoke
     */
    public function postAsync(array $options = [
        'out_request_no' => 'APPLYMENT_00000000001',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments\OutRequestNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 通过业务申请编号查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/out-request-no/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'out_request_no' => 'APPLYMENT_00000000001',
    ]): ResponseInterface;

    /**
     * 通过业务申请编号查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/out-request-no/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'out_request_no' => 'APPLYMENT_00000000001',
    ]): PromiseInterface;
}

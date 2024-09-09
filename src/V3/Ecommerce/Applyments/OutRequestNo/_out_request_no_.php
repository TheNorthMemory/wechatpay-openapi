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
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-merchant-application/applyment/get-state-by-out-request-no.html
     */
    public function get(array $options = [
        'out_request_no' => 'APPLYMENT_00000000001',
    ]): ResponseInterface;

    /**
     * 通过业务申请编号查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/ecommerce-merchant-application/applyment/get-state-by-out-request-no.html#async
     */
    public function getAsync(array $options = [
        'out_request_no' => 'APPLYMENT_00000000001',
    ]): PromiseInterface;
}

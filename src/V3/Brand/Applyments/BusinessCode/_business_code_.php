<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Applyments\BusinessCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _business_code_
{
    /**
     * 根据业务申请编号查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/applyments/business-code/%7Bbusiness_code%7D
     */
    public function get(array $options = [
        'business_code' => '190001351110000',
    ]): ResponseInterface;

    /**
     * 根据业务申请编号查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/applyments/business-code/%7Bbusiness_code%7D
     */
    public function getAsync(array $options = [
        'business_code' => '190001351110000',
    ]): PromiseInterface;
}

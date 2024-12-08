<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Applyment4sub\Applyment\Business_code;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _business_code_
{
    /**
     * 通过业务申请编号查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/applyment4sub/applyment/business_code/%7Bbusiness_code%7D
     */
    public function get(array $options = [
        'business_code' => '',
    ]): ResponseInterface;

    /**
     * 通过业务申请编号查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/applyment4sub/applyment/business_code/%7Bbusiness_code%7D
     */
    public function getAsync(array $options = [
        'business_code' => '',
    ]): PromiseInterface;
}

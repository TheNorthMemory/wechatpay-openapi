<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _applyment_id_
{
    /**
     * 通过申请单ID查询申请状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/%7Bapplyment_id%7D
     */
    public function get(array $options = [
        'applyment_id' => '2000002124775691',
    ]): ResponseInterface;

    /**
     * 通过申请单ID查询申请状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/%7Bapplyment_id%7D
     */
    public function getAsync(array $options = [
        'applyment_id' => '2000002124775691',
    ]): PromiseInterface;
}

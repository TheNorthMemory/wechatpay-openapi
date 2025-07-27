<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Applyments\_applyment_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Revoke
{
    /**
     * 撤销申请单-使用申请单号(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/%7Bapplyment_id%7D/revoke
     */
    public function post(array $options = [
        'applyment_id' => '2000002124775691',
    ]): ResponseInterface;

    /**
     * 撤销申请单-使用申请单号(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/applyments/%7Bapplyment_id%7D/revoke
     */
    public function postAsync(array $options = [
        'applyment_id' => '2000002124775691',
    ]): PromiseInterface;
}

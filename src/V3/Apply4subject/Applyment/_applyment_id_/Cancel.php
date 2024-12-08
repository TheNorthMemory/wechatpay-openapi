<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Apply4subject\Applyment\_applyment_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Cancel
{
    /**
     * 撤销商户开户意愿申请单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/apply4subject/applyment/%7Bapplyment_id%7D/cancel
     */
    public function post(array $options = [
        'applyment_id' => '',
    ]): ResponseInterface;

    /**
     * 撤销商户开户意愿申请单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/apply4subject/applyment/%7Bapplyment_id%7D/cancel
     */
    public function postAsync(array $options = [
        'applyment_id' => '',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface RepaymentUrl
{
    /**
     * 获取还款链接接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/repayment-url
     */
    public function post(array $options = [
        'json' => [
            'out_user_id' => '',
            'organization_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 获取还款链接接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/repayment-url
     */
    public function postAsync(array $options = [
        'json' => [
            'out_user_id' => '',
            'organization_id' => '',
        ],
    ]): PromiseInterface;
}

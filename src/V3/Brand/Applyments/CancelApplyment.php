<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Applyments;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CancelApplyment
{
    /**
     * 撤销申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/applyments/cancel-applyment
     */
    public function post(array $options = [
        'json' => [
            'applyment_id' => '2000002124775691',
            'business_code' => '190001351110000',
        ],
    ]): ResponseInterface;

    /**
     * 撤销申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/applyments/cancel-applyment
     */
    public function postAsync(array $options = [
        'json' => [
            'applyment_id' => '2000002124775691',
            'business_code' => '190001351110000',
        ],
    ]): PromiseInterface;
}

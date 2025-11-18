<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Card\CardLinks;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface CancelApplyment
{
    /**
     * 撤销交易连接名片配置申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links/cancel-applyment
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'brand_id' => '1004',
        ],
    ]): ResponseInterface;

    /**
     * 撤销交易连接名片配置申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-links/cancel-applyment
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'brand_id' => '1004',
        ],
    ]): PromiseInterface;
}

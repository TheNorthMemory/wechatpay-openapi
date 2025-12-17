<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Card\CardConfigs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Publish
{
    /**
     * 发布商家名片配置(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs/publish
     */
    public function post(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'applyment_id' => '1111111111',
            'brand_id' => '1004',
            'publish_type' => 'SCHEDULED_PUBLISH',
            'scheduled_publish_time' => '2025-05-20T13:29:35+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 发布商家名片配置(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/card/card-configs/publish
     */
    public function postAsync(array $options = [
        'json' => [
            'business_code' => '190001351110000',
            'applyment_id' => '1111111111',
            'brand_id' => '1004',
            'publish_type' => 'SCHEDULED_PUBLISH',
            'scheduled_publish_time' => '2025-05-20T13:29:35+08:00',
        ],
    ]): PromiseInterface;
}

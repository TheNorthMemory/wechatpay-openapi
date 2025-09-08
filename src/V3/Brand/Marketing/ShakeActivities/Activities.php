<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Brand\Marketing\ShakeActivities;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Activities
{
    /**
     * 查询摇优惠活动列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/marketing/shake-activities/activities
     */
    public function get(array $options = [
        'query' => [
            'brand_id' => '120344',
            'limit' => 5,
            'offset' => 10,
            'activity_state' => 'CREATED',
            'audit_state' => 'PENDING',
        ],
    ]): ResponseInterface;

    /**
     * 查询摇优惠活动列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/brand/marketing/shake-activities/activities
     */
    public function getAsync(array $options = [
        'query' => [
            'brand_id' => '120344',
            'limit' => 5,
            'offset' => 10,
            'activity_state' => 'CREATED',
            'audit_state' => 'PENDING',
        ],
    ]): PromiseInterface;
}

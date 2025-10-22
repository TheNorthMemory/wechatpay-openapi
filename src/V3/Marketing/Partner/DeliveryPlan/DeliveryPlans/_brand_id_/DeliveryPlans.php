<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\DeliveryPlan\DeliveryPlans\_brand_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface DeliveryPlans
{
    /**
     * 分页查询投放计划列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans/%7Bbrand_id%7D/delivery-plans
     */
    public function get(array $options = [
        'brand_id' => '40016',
        'query' => [
            'page_size' => 5,
            'offset' => 10,
            'plan_state' => 'PLAN_CREATED',
            'audit_state' => '12000',
            'plan_id' => '12000',
        ],
    ]): ResponseInterface;

    /**
     * 分页查询投放计划列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans/%7Bbrand_id%7D/delivery-plans
     */
    public function getAsync(array $options = [
        'brand_id' => '40016',
        'query' => [
            'page_size' => 5,
            'offset' => 10,
            'plan_state' => 'PLAN_CREATED',
            'audit_state' => '12000',
            'plan_id' => '12000',
        ],
    ]): PromiseInterface;
}

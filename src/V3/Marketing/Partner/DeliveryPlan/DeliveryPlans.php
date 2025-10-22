<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\DeliveryPlan;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read DeliveryPlans\_plan_id_ $_plan_id_
 * @property-read DeliveryPlans\_brand_id_ $_brand_id_
 */
interface DeliveryPlans
{
    /**
     * 创建投放计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => 'asdf-1234-40016',
            'brand_id' => '40016',
            'product_coupon_id' => '701146876221757924829193824428',
            'stock_id' => '701246876221757924829194755312',
            'plan_name' => '冬季饮料投放',
            'total_count' => 1,
            'user_limit' => 1,
            'daily_limit' => 1,
            'delivery_start_time' => '2025-01-01T00:00:00+08:00',
            'delivery_end_time' => '2025-01-01T00:00:00+08:00',
            'recommend_word' => '天天有惊喜',
        ],
    ]): ResponseInterface;

    /**
     * 创建投放计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => 'asdf-1234-40016',
            'brand_id' => '40016',
            'product_coupon_id' => '701146876221757924829193824428',
            'stock_id' => '701246876221757924829194755312',
            'plan_name' => '冬季饮料投放',
            'total_count' => 1,
            'user_limit' => 1,
            'daily_limit' => 1,
            'delivery_start_time' => '2025-01-01T00:00:00+08:00',
            'delivery_end_time' => '2025-01-01T00:00:00+08:00',
            'recommend_word' => '天天有惊喜',
        ],
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\DeliveryPlan\DeliveryPlans;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _plan_id_\Terminate $terminate
 */
interface _plan_id_
{
    /**
     * 更新投放计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans/%7Bplan_id%7D
     */
    public function patch(array $options = [
        'plan_id' => '12000',
        'json' => [
            'modify_content' => [
                'plan_name' => '冬季饮料投放',
                'delivery_end_time' => '2025-01-01T00:00:00+08:00',
                'total_count' => 1,
                'user_limit' => 1,
                'daily_limit' => 1,
                'recommend_word' => '天天有惊喜',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 更新投放计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans/%7Bplan_id%7D
     */
    public function patchAsync(array $options = [
        'plan_id' => '12000',
        'json' => [
            'modify_content' => [
                'plan_name' => '冬季饮料投放',
                'delivery_end_time' => '2025-01-01T00:00:00+08:00',
                'total_count' => 1,
                'user_limit' => 1,
                'daily_limit' => 1,
                'recommend_word' => '天天有惊喜',
            ],
        ],
    ]): PromiseInterface;
}

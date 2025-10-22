<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Partner\DeliveryPlan\DeliveryPlans\_plan_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 终止投放计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans/%7Bplan_id%7D/terminate
     */
    public function post(array $options = [
        'plan_id' => '12000',
    ]): ResponseInterface;

    /**
     * 终止投放计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/marketing/partner/delivery-plan/delivery-plans/%7Bplan_id%7D/terminate
     */
    public function postAsync(array $options = [
        'plan_id' => '12000',
    ]): PromiseInterface;
}

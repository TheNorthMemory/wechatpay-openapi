<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\SignPlan\UserSignPlans\MerchantSignPlanNo\_merchant_sign_plan_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Stop
{
    /**
     * 直连商户取消用户的签约计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/user-sign-plan/stop-user-sign-plan.html
     */
    public function post(array $options = [
        'merchant_sign_plan_no' => '1234323JKHDFE1243252',
        'json' => [
            'stop_reason' => '用户协商后停止',
        ],
    ]): ResponseInterface;

    /**
     * 直连商户取消用户的签约计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/user-sign-plan/stop-user-sign-plan.html#async
     */
    public function postAsync(array $options = [
        'merchant_sign_plan_no' => '1234323JKHDFE1243252',
        'json' => [
            'stop_reason' => '用户协商后停止',
        ],
    ]): PromiseInterface;
}

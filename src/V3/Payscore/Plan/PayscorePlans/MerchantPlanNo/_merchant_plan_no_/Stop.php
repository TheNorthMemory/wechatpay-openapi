<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Plan\PayscorePlans\MerchantPlanNo\_merchant_plan_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Stop
{
    /**
     * 停止支付分计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/pay-score-plan/stop-pay-score-plan.html
     */
    public function post(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
    ]): ResponseInterface;

    /**
     * 停止支付分计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/pay-score-plan/stop-pay-score-plan.html#async
     */
    public function postAsync(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
    ]): PromiseInterface;
}

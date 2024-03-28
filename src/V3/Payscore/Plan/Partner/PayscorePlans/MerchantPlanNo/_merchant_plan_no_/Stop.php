<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Plan\Partner\PayscorePlans\MerchantPlanNo\_merchant_plan_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Stop
{
    /**
     * 停止支付分计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-payscore-plan/partner-pay-score-plan/stop-partner-pay-score-plan.html
     */
    public function post(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
        'json' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 停止支付分计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-payscore-plan/partner-pay-score-plan/stop-partner-pay-score-plan.html#async
     */
    public function postAsync(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
        'json' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

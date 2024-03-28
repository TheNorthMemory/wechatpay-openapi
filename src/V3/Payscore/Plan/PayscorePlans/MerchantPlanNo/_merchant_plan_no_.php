<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Plan\PayscorePlans\MerchantPlanNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _merchant_plan_no_\Stop $stop
 */
interface _merchant_plan_no_
{
    /**
     * 查询支付分计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/pay-score-plan/query-pay-score-plan.html
     */
    public function get(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
    ]): ResponseInterface;

    /**
     * 查询支付分计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/pay-score-plan/query-pay-score-plan.html#async
     */
    public function getAsync(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
    ]): PromiseInterface;
}

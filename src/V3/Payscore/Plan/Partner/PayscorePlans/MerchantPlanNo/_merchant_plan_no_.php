<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\Plan\Partner\PayscorePlans\MerchantPlanNo;

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
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-payscore-plan/partner-pay-score-plan/query-partner-pay-score-plan.html
     */
    public function get(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询支付分计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/partner-payscore-plan/partner-pay-score-plan/query-partner-pay-score-plan.html#async
     */
    public function getAsync(array $options = [
        'merchant_plan_no' => '1234323JKHDFE1243252',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

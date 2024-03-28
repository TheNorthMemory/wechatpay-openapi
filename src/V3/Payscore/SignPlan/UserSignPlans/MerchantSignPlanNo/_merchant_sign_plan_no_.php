<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\SignPlan\UserSignPlans\MerchantSignPlanNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _merchant_sign_plan_no_\Stop $stop
 */
interface _merchant_sign_plan_no_
{
    /**
     * 查询用户的签约计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/user-sign-plan/query-user-sign-plan.html
     */
    public function get(array $options = [
        'merchant_sign_plan_no' => '1234323JKHDFE1243252',
    ]): ResponseInterface;

    /**
     * 查询用户的签约计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/payscore-plan/user-sign-plan/query-user-sign-plan.html#async
     */
    public function getAsync(array $options = [
        'merchant_sign_plan_no' => '1234323JKHDFE1243252',
    ]): PromiseInterface;
}

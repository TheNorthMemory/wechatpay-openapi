<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\SignPlan\Partner\UserSignPlans\MerchantSignPlanNo;

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
     * @link https://wechatpay.im/openapi/v3/payscore/sign-plan/partner/user-sign-plans/merchant-sign-plan-no/%7Bmerchant_sign_plan_no%7D
     */
    public function get(array $options = [
        'merchant_sign_plan_no' => '1234323JKHDFE1243252',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 查询用户的签约计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/sign-plan/partner/user-sign-plans/merchant-sign-plan-no/%7Bmerchant_sign_plan_no%7D
     */
    public function getAsync(array $options = [
        'merchant_sign_plan_no' => '1234323JKHDFE1243252',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

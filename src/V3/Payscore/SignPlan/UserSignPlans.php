<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Payscore\SignPlan;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read UserSignPlans\MerchantSignPlanNo $merchantSignPlanNo
 */
interface UserSignPlans
{
    /**
     * 创建用户的签约计划(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/sign-plan/user-sign-plans
     */
    public function post(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'plan_id' => '01000033210000324638000000376258',
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'merchant_sign_plan_no' => '1234323JKHDFE1243252',
            'notify_url' => 'https://api.test.com',
            'sign_plan_detail' => [[
                'plan_detail_no' => 1,
                'merchant_plan_detail_no' => '1234323JKHDFE1243252',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 创建用户的签约计划(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/payscore/sign-plan/user-sign-plans
     */
    public function postAsync(array $options = [
        'json' => [
            'service_id' => '2002000000000558128851361561536',
            'plan_id' => '01000033210000324638000000376258',
            'appid' => 'wxd678efh567hg6787',
            'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
            'merchant_sign_plan_no' => '1234323JKHDFE1243252',
            'notify_url' => 'https://api.test.com',
            'sign_plan_detail' => [[
                'plan_detail_no' => 1,
                'merchant_plan_detail_no' => '1234323JKHDFE1243252',
            ],],
        ],
    ]): PromiseInterface;
}

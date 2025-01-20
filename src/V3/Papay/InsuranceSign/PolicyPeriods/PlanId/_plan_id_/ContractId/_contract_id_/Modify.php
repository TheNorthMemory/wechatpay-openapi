<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsuranceSign\PolicyPeriods\PlanId\_plan_id_\ContractId\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Modify
{
    /**
     * 保险商户修改保险扣费周期列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-sign/policy-periods/plan-id/%7Bplan_id%7D/contract-id/%7Bcontract_id%7D/modify
     */
    public function post(array $options = [
        'plan_id' => '12535',
        'contract_id' => '2015071056489715',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'policy_periods' => [[
                'policy_period_id' => 1,
                'estimated_deduct_date' => '2019-11-22',
                'estimated_deduct_amount' => [
                    'total' => 1,
                    'currency' => 'CNY',
                ],
            ],],
            'allow_cancel_scheduled' => true,
        ],
    ]): ResponseInterface;

    /**
     * 保险商户修改保险扣费周期列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-sign/policy-periods/plan-id/%7Bplan_id%7D/contract-id/%7Bcontract_id%7D/modify
     */
    public function postAsync(array $options = [
        'plan_id' => '12535',
        'contract_id' => '2015071056489715',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'policy_periods' => [[
                'policy_period_id' => 1,
                'estimated_deduct_date' => '2019-11-22',
                'estimated_deduct_amount' => [
                    'total' => 1,
                    'currency' => 'CNY',
                ],
            ],],
            'allow_cancel_scheduled' => true,
        ],
    ]): PromiseInterface;
}

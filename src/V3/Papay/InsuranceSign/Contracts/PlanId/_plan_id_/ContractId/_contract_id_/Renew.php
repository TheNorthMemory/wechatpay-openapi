<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsuranceSign\Contracts\PlanId\_plan_id_\ContractId\_contract_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Renew
{
    /**
     * 保险商户受理续期自动续费协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-sign/contracts/plan-id/%7Bplan_id%7D/contract-id/%7Bcontract_id%7D/renew
     */
    public function post(array $options = [
        'plan_id' => '',
        'contract_id' => '',
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
        ],
    ]): ResponseInterface;

    /**
     * 保险商户受理续期自动续费协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-sign/contracts/plan-id/%7Bplan_id%7D/contract-id/%7Bcontract_id%7D/renew
     */
    public function postAsync(array $options = [
        'plan_id' => '',
        'contract_id' => '',
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
        ],
    ]): PromiseInterface;
}

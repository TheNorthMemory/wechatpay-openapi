<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsurancePay\PolicyPeriods\ContractId\_contract_id_\PolicyPeriodId\_policy_period_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Schedule
{
    /**
     * 保险商户预约保险自动续费(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-pay/policy-periods/contract-id/%7Bcontract_id%7D/policy-period-id/%7Bpolicy_period_id%7D/schedule
     */
    public function post(array $options = [
        'policy_period_id' => '1',
        'contract_id' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'scheduled_amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): ResponseInterface;

    /**
     * 保险商户预约保险自动续费(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-pay/policy-periods/contract-id/%7Bcontract_id%7D/policy-period-id/%7Bpolicy_period_id%7D/schedule
     */
    public function postAsync(array $options = [
        'policy_period_id' => '1',
        'contract_id' => '',
        'json' => [
            'appid' => 'wxd678efh567hg6787',
            'scheduled_amount' => [
                'total' => 1,
                'currency' => 'CNY',
            ],
        ],
    ]): PromiseInterface;
}

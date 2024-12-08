<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsurancePay\PolicyPeriods\ContractId\_contract_id_\PolicyPeriodId;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _policy_period_id_\Schedule $schedule
 */
interface _policy_period_id_
{
    /**
     * 保险商户查询保险自动续费预约(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-pay/policy-periods/contract-id/%7Bcontract_id%7D/policy-period-id/%7Bpolicy_period_id%7D
     */
    public function get(array $options = [
        'contract_id' => '',
        'policy_period_id' => '1',
    ]): ResponseInterface;

    /**
     * 保险商户查询保险自动续费预约(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-pay/policy-periods/contract-id/%7Bcontract_id%7D/policy-period-id/%7Bpolicy_period_id%7D
     */
    public function getAsync(array $options = [
        'contract_id' => '',
        'policy_period_id' => '1',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\InsuranceSign\Policy_periods\PlanId\_plan_id_\OutContractCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_contract_code_
{
    /**
     * 保险商户查询保险扣费周期列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-sign/policy_periods/plan-id/%7Bplan_id%7D/out-contract-code/%7Bout_contract_code%7D
     */
    public function get(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'plan_id' => '12535',
        'query' => [
            'limit' => 20,
            'offset' => 50,
        ],
    ]): ResponseInterface;

    /**
     * 保险商户查询保险扣费周期列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/insurance-sign/policy_periods/plan-id/%7Bplan_id%7D/out-contract-code/%7Bout_contract_code%7D
     */
    public function getAsync(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'plan_id' => '12535',
        'query' => [
            'limit' => 20,
            'offset' => 50,
        ],
    ]): PromiseInterface;
}

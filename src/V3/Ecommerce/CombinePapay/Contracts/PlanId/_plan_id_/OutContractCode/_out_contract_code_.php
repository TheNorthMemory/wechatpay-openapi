<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\CombinePapay\Contracts\PlanId\_plan_id_\OutContractCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_contract_code_\Terminate $terminate
 */
interface _out_contract_code_
{
    /**
     * 通过商户协议号查询协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/combine-papay/contracts/plan-id/%7Bplan_id%7D/out-contract-code/%7Bout_contract_code%7D
     */
    public function get(array $options = [
        'plan_id' => '12535',
        'out_contract_code' => 'wxwtdk20200910100000',
    ]): ResponseInterface;

    /**
     * 通过商户协议号查询协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/combine-papay/contracts/plan-id/%7Bplan_id%7D/out-contract-code/%7Bout_contract_code%7D
     */
    public function getAsync(array $options = [
        'plan_id' => '12535',
        'out_contract_code' => 'wxwtdk20200910100000',
    ]): PromiseInterface;
}

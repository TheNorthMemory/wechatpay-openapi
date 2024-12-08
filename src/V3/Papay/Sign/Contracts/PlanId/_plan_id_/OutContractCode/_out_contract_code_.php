<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Sign\Contracts\PlanId\_plan_id_\OutContractCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_contract_code_\Terminate $terminate
 */
interface _out_contract_code_
{
    /**
     * 通过商户协议号查询委托代扣签约协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/sign/contracts/plan-id/%7Bplan_id%7D/out-contract-code/%7Bout_contract_code%7D
     */
    public function get(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'plan_id' => '12535',
    ]): ResponseInterface;

    /**
     * 通过商户协议号查询委托代扣签约协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/papay/sign/contracts/plan-id/%7Bplan_id%7D/out-contract-code/%7Bout_contract_code%7D
     */
    public function getAsync(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'plan_id' => '12535',
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Sign\Partner\Contracts\PlanId\_plan_id_\OutContractCode\_out_contract_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 通过商户协议号解除委托代扣签约协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/entrusted-payment/partner/partner-terminate-contract-by-code.html
     */
    public function post(array $options = [
        'plan_id' => '12535',
        'out_contract_code' => 'wxwtdk20200910100000',
        'json' => [
            'sub_mchid' => '1900000109',
            'contract_termination_remark' => '用户解约',
        ],
    ]): ResponseInterface;

    /**
     * 通过商户协议号解除委托代扣签约协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/entrusted-payment/partner/partner-terminate-contract-by-code.html#async
     */
    public function postAsync(array $options = [
        'plan_id' => '12535',
        'out_contract_code' => 'wxwtdk20200910100000',
        'json' => [
            'sub_mchid' => '1900000109',
            'contract_termination_remark' => '用户解约',
        ],
    ]): PromiseInterface;
}

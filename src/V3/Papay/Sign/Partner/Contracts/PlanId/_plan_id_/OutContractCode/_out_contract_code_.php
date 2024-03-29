<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Papay\Sign\Partner\Contracts\PlanId\_plan_id_\OutContractCode;

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
     * @link https://pay.weixin.qq.com/docs/partner/apis/entrusted-payment/partner/partner-get-contract-by-code.html
     */
    public function get(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'plan_id' => '12535',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 通过商户协议号查询委托代扣签约协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/entrusted-payment/partner/partner-get-contract-by-code.html#async
     */
    public function getAsync(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'plan_id' => '12535',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}

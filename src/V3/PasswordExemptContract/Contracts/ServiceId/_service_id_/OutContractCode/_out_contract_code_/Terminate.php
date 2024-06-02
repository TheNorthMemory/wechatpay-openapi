<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PasswordExemptContract\Contracts\ServiceId\_service_id_\OutContractCode\_out_contract_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 商户通过商户协议号解约协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/password-free-contract/contracts/terminate-by-code.html
     */
    public function post(array $options = [
        'service_id' => '12535',
        'out_contract_code' => 'wxwtdk20200910100000',
        'json' => [
            'contract_termination_remark' => '用户解约',
        ],
    ]): ResponseInterface;

    /**
     * 商户通过商户协议号解约协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/password-free-contract/contracts/terminate-by-code.html#async
     */
    public function postAsync(array $options = [
        'service_id' => '12535',
        'out_contract_code' => 'wxwtdk20200910100000',
        'json' => [
            'contract_termination_remark' => '用户解约',
        ],
    ]): PromiseInterface;
}

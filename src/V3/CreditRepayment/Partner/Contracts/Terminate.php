<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Terminate
{
    /**
     * 解除自动还款协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/terminate
     */
    public function post(array $options = [
        'json' => [
            'out_contract_code' => '100001256',
            'contract_termination_remark' => 'example_contract_termination_remark',
        ],
    ]): ResponseInterface;

    /**
     * 解除自动还款协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/terminate
     */
    public function postAsync(array $options = [
        'json' => [
            'out_contract_code' => '100001256',
            'contract_termination_remark' => 'example_contract_termination_remark',
        ],
    ]): PromiseInterface;
}

<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\CreditRepayment\Partner\Contracts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_contract_code_
{
    /**
     * 查询自动还款协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/%7Bout_contract_code%7D
     */
    public function get(array $options = [
        'out_contract_code' => '100005698',
    ]): ResponseInterface;

    /**
     * 查询自动还款协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/credit-repayment/partner/contracts/%7Bout_contract_code%7D
     */
    public function getAsync(array $options = [
        'out_contract_code' => '100005698',
    ]): PromiseInterface;
}

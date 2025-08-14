<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\IndividualContracts\OutContractCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_contract_code_
{
    /**
     * 根据业务申请单号查签约信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/out-contract-code/%7Bout_contract_code%7D
     */
    public function get(array $options = [
        'out_contract_code' => 'APPLYMENT_00000000001',
        'query' => [
            'appid' => 'wxd678efh567h23787',
        ],
    ]): ResponseInterface;

    /**
     * 根据业务申请单号查签约信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/out-contract-code/%7Bout_contract_code%7D
     */
    public function getAsync(array $options = [
        'out_contract_code' => 'APPLYMENT_00000000001',
        'query' => [
            'appid' => 'wxd678efh567h23787',
        ],
    ]): PromiseInterface;
}

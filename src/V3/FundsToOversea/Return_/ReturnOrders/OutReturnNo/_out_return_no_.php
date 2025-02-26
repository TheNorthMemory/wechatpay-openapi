<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundsToOversea\Return_\ReturnOrders\OutReturnNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_return_no_
{
    /**
     * 查询出境退回结果（通过商户出境退回单号）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/return/return-orders/out-return-no/%7Bout_return_no%7D
     */
    public function get(array $options = [
        'out_return_no' => 'merchant123123',
        'query' => [
            'sub_mchid' => '1231231',
        ],
    ]): ResponseInterface;

    /**
     * 查询出境退回结果（通过商户出境退回单号）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/funds-to-oversea/return/return-orders/out-return-no/%7Bout_return_no%7D
     */
    public function getAsync(array $options = [
        'out_return_no' => 'merchant123123',
        'query' => [
            'sub_mchid' => '1231231',
        ],
    ]): PromiseInterface;
}

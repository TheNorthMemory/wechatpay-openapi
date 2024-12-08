<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\BankTransferRecharges\OutRechargeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_recharge_no_
{
    /**
     * 查询银行转账充值结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/bank-transfer-recharges/out-recharge-no/%7Bout_recharge_no%7D
     */
    public function get(array $options = [
        'out_recharge_no' => 'cz202407181234',
    ]): ResponseInterface;

    /**
     * 查询银行转账充值结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/bank-transfer-recharges/out-recharge-no/%7Bout_recharge_no%7D
     */
    public function getAsync(array $options = [
        'out_recharge_no' => 'cz202407181234',
    ]): PromiseInterface;
}
